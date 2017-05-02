<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Jornada Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $local
 * @property string $visitante
 * @property \Cake\I18n\Time $fecha
 * @property \Cake\I18n\Time $hora
 * @property int $arbitro_id
 * @property string $campo
 * @property int $acta_id
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Arbitro $arbitro
 * @property \App\Model\Entity\Acta $acta
 * @property \App\Model\Entity\Partido[] $partidos
 */
class Jornada extends Entity
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
