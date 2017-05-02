<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Acta Entity
 *
 * @property int $id
 * @property int $goles_local
 * @property int $goles_visitante
 * @property int $t_amarillas
 * @property int $t_rojas
 * @property string $incidencias
 * @property string $campo
 * @property string $localidad
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Jornada[] $jornadas
 * @property \App\Model\Entity\Partido[] $partidos
 */
class Acta extends Entity
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
