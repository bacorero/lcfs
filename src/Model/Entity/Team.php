<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Team Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $contacto
 * @property string $direccion
 * @property string $poblacion
 * @property string $telefono
 * @property string $photo
 * @property string $photo_dir
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $categoria_id
 *
 * @property \App\Model\Entity\Categoria $categoria
 * @property \App\Model\Entity\Player[] $players
 */
class Team extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'photo_dir' => false
    ];
}
