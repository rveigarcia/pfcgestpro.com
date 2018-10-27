<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Grupo Entity
 *
 * @property int $id
 * @property int $id_jefe
 * @property string $alias
 * @property string $seccion
 * @property \Cake\I18n\FrozenTime $fecha_add
 * @property \Cake\I18n\FrozenTime $fecha_mod
 */
class Grupo extends Entity
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
        'id_jefe' => true,
        'alias' => true,
        'seccion' => true,
        'fecha_add' => true,
        'fecha_mod' => true
    ];
}