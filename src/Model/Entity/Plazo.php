<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Plazo Entity
 *
 * @property int $id
 * @property int $id_proyecto
 * @property \Cake\I18n\FrozenDate $fecha_ini
 * @property \Cake\I18n\FrozenDate $fecha_fin
 * @property \Cake\I18n\FrozenTime $fecha_add
 * @property \Cake\I18n\FrozenTime $fecha_mod
 */
class Plazo extends Entity
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
        'id_proyecto' => true,
        'fecha_ini' => true,
        'fecha_fin' => true,
        'fecha_add' => true,
        'fecha_mod' => true
    ];
}
