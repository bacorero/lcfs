<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Partidos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Arbitros
 * @property \Cake\ORM\Association\BelongsTo $Actas
 * @property \Cake\ORM\Association\BelongsTo $Jornadas
 *
 * @method \App\Model\Entity\Partido get($primaryKey, $options = [])
 * @method \App\Model\Entity\Partido newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Partido[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Partido|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Partido patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Partido[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Partido findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PartidosTable extends Table
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

        $this->setTable('partidos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Arbitros', [
            'foreignKey' => 'arbitro_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Actas', [
            'foreignKey' => 'acta_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Jornadas', [
            'foreignKey' => 'jornada_id',
            'joinType' => 'INNER'
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
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->requirePresence('local', 'create')
            ->notEmpty('local');

        $validator
            ->requirePresence('visitante', 'create')
            ->notEmpty('visitante');

        $validator
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmpty('fecha');

        $validator
            ->time('hora')
            ->requirePresence('hora', 'create')
            ->notEmpty('hora');

        $validator
            ->requirePresence('campo', 'create')
            ->notEmpty('campo');

        $validator
            ->integer('team_id_l')
            ->requirePresence('team_id_l', 'create')
            ->notEmpty('team_id_l');

        $validator
            ->integer('team_id_v')
            ->requirePresence('team_id_v', 'create')
            ->notEmpty('team_id_v');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['arbitro_id'], 'Arbitros'));
        $rules->add($rules->existsIn(['acta_id'], 'Actas'));
        $rules->add($rules->existsIn(['jornada_id'], 'Jornadas'));

        return $rules;
    }
}
