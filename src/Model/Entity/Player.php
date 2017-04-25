<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Player Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellido
 * @property string $direccion
 * @property string $pablacion
 * @property string $dni
 * @property string $telefono
 * @property string $nacionalidad
 * @property \Cake\I18n\Time $f_nacimiento
 * @property string $observaciones
 * @property int $g_recibidos
 * @property int $t_amarillas
 * @property int $t_rojas
 * @property int $t_acumuladas
 * @property int $goles
 * @property int $p_jugados
 * @property int $p_sancionados
 * @property int $dorsal
 * @property string $photo
 * @property string $photo_dir
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $team_id
 *
 * @property \App\Model\Entity\Team $team
 */
class Player extends Entity
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
