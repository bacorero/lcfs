<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Arbitros Model
 *
 * @property \Cake\ORM\Association\HasMany $Jornadas
 * @property \Cake\ORM\Association\HasMany $Partidos
 *
 * @method \App\Model\Entity\Arbitro get($primaryKey, $options = [])
 * @method \App\Model\Entity\Arbitro newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Arbitro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Arbitro|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Arbitro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Arbitro[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Arbitro findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ArbitrosTable extends Table
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

        $this->setTable('arbitros');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Jornadas', [
            'foreignKey' => 'arbitro_id'
        ]);
        $this->hasMany('Partidos', [
            'foreignKey' => 'arbitro_id'
        ]);

        //Configuración de la subida de fotos
        $this->addBehavior('Proffer.Proffer', [
    'photo' => [    // The name of your upload field
        'root' => WWW_ROOT . 'files', // Customise the root upload folder here, or omit to use the default
        'dir' => 'photo_dir',   // The name of the field to store the folder
        'thumbnailSizes' => [ // Declare your thumbnails
            'square' => [   // Define the prefix of your thumbnail
                'w' => 200, // Width
                'h' => 200, // Height
                //'crop' => true,
                'jpeg_quality'  => 100
            ],
            'portrait' => [     // Define a second thumbnail
                'w' => 50,
                'h' => 50,
                //'crop' => true
            ],
        ],
        'thumbnailMethod' => 'gd'   // Options are Imagick or Gd
    ]
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
/*
        $validator
            ->requirePresence('apellido', 'create')
            ->notEmpty('apellido');

        $validator
            ->requirePresence('direccion', 'create')
            ->notEmpty('direccion');

        $validator
            ->requirePresence('poblacion', 'create')
            ->notEmpty('poblacion'); */

        $validator
            ->requirePresence('dni', 'create')
            ->notEmpty('dni');
/*
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
            ->requirePresence('photo', 'create')
            ->notEmpty('photo');

        $validator
            ->requirePresence('photo_dir', 'create')
            ->notEmpty('photo_dir'); */

        return $validator;
    }
}
