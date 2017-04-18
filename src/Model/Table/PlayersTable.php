<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Players Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Teams
 *
 * @method \App\Model\Entity\Player get($primaryKey, $options = [])
 * @method \App\Model\Entity\Player newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Player[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Player|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Player patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Player[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Player findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PlayersTable extends Table
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

        $this->setTable('players');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Teams', [
            'foreignKey' => 'team_id',
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
            ->requirePresence('apellido', 'create')
            ->notEmpty('apellido');

        $validator
            ->requirePresence('direccion', 'create')
            ->notEmpty('direccion');

        $validator
            ->requirePresence('pablacion', 'create')
            ->notEmpty('pablacion');

        $validator
            ->requirePresence('dni', 'create')
            ->notEmpty('dni');

        $validator
            ->requirePresence('telefono', 'create')
            ->notEmpty('telefono');

        $validator
            ->requirePresence('nacionalidad', 'create')
            ->notEmpty('nacionalidad');

        $validator
            ->date('f_nacimiento')
            ->requirePresence('f_nacimiento', 'create')
            ->notEmpty('f_nacimiento');

        $validator
            ->requirePresence('observaciones', 'create')
            ->notEmpty('observaciones');

        $validator
            ->integer('g_recibidos')
            ->requirePresence('g_recibidos', 'create')
            ->notEmpty('g_recibidos');

        $validator
            ->integer('t_amarillas')
            ->requirePresence('t_amarillas', 'create')
            ->notEmpty('t_amarillas');

        $validator
            ->integer('t_rojas')
            ->requirePresence('t_rojas', 'create')
            ->notEmpty('t_rojas');

        $validator
            ->integer('t_acumuladas')
            ->requirePresence('t_acumuladas', 'create')
            ->notEmpty('t_acumuladas');

        $validator
            ->integer('goles')
            ->requirePresence('goles', 'create')
            ->notEmpty('goles');

        $validator
            ->integer('p_jugados')
            ->requirePresence('p_jugados', 'create')
            ->notEmpty('p_jugados');

        $validator
            ->integer('p_sancionados')
            ->requirePresence('p_sancionados', 'create')
            ->notEmpty('p_sancionados');

        $validator
            ->integer('dorsal')
            ->requirePresence('dorsal', 'create')
            ->notEmpty('dorsal');

        $validator
            ->requirePresence('photo', 'create')
            ->notEmpty('photo');

        $validator
            ->requirePresence('photo_dir', 'create')
            ->notEmpty('photo_dir');

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
        $rules->add($rules->existsIn(['team_id'], 'Teams'));

        return $rules;
    }
}
