<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Parciale Entity
 *
 * @property int $id
 * @property int $id_plazo
 * @property int $id_fase
 * @property string $concepto
 * @property string $descripcion
 * @property \Cake\I18n\FrozenDate $fecha_ini_teorica
 * @property \Cake\I18n\FrozenDate $fecha_fin_teorica
 * @property \Cake\I18n\FrozenDate $fecha_ini_tarea
 * @property \Cake\I18n\FrozenDate $fecha_fin_tarea
 * @property \Cake\I18n\FrozenTime $fecha_add
 * @property \Cake\I18n\FrozenTime $fecha_mod
 */
class Parciale extends Entity
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
        'id_plazo' => true,
        'id_fase' => true,
        'concepto' => true,
        'descripcion' => true,
        'fecha_ini_teorica' => true,
        'fecha_fin_teorica' => true,
        'fecha_ini_tarea' => true,
        'fecha_fin_tarea' => true,
        'fecha_add' => true,
        'fecha_mod' => true
    ];
}
