<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Actas Model
 *
 * @property \Cake\ORM\Association\HasMany $Jornadas
 * @property \Cake\ORM\Association\HasMany $Partidos
 *
 * @method \App\Model\Entity\Acta get($primaryKey, $options = [])
 * @method \App\Model\Entity\Acta newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Acta[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Acta|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Acta patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Acta[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Acta findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ActasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('actas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Jornadas', [
            'foreignKey' => 'acta_id'
        ]);
        $this->hasMany('Partidos', [
            'foreignKey' => 'acta_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('goles_local')
            ->requirePresence('goles_local', 'create')
            ->notEmpty('goles_local');

        $validator
            ->integer('goles_visitante')
            ->requirePresence('goles_visitante', 'create')
            ->notEmpty('goles_visitante');

        $validator
            ->integer('t_amarillas')
            ->requirePresence('t_amarillas', 'create')
            ->notEmpty('t_amarillas');

        $validator
            ->integer('t_rojas')
            ->requirePresence('t_rojas', 'create')
            ->notEmpty('t_rojas');

        $validator
            ->requirePresence('incidencias', 'create')
            ->notEmpty('incidencias');

        $validator
            ->requirePresence('campo', 'create')
            ->notEmpty('campo');

        $validator
            ->requirePresence('localidad', 'create')
            ->notEmpty('localidad');

        return $validator;
    }
}
