<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Jefe Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellidos
 * @property string $direccion
 * @property string $email
 * @property \Cake\I18n\FrozenTime $fecha_add
 * @property \Cake\I18n\FrozenTime $fecha_mod
 */
class Jefe extends Entity
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
        'nombre' => true,
        'apellidos' => true,
        'direccion' => true,
        'email' => true,
        'fecha_add' => true,
        'fecha_mod' => true
    ];
}
