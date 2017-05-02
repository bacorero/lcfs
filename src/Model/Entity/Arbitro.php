<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Arbitro Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellido
 * @property string $direccion
 * @property string $poblacion
 * @property string $dni
 * @property string $telefono
 * @property string $nacionalidad
 * @property \Cake\I18n\Time $f_nacimiento
 * @property string $photo
 * @property string $photo_dir
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Jornada[] $jornadas
 * @property \App\Model\Entity\Partido[] $partidos
 */
class Arbitro extends Entity
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
        'id' => false
    ];
}
