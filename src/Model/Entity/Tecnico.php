<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tecnico Entity
 *
 * @property int $id
 * @property int $id_grupo
 * @property string $nombre
 * @property string $apelldos
 * @property string $tipo
 * @property string $direccion
 * @property string $email
 * @property \Cake\I18n\FrozenTime $fecha_add
 * @property \Cake\I18n\FrozenTime $fecha_mod
 */
class Tecnico extends Entity
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
        'id_grupo' => true,
        'id_categoria' => true,
        'nombre' => true,
        'apellidos' => true,
        'direccion' => true,
        'email' => true,
        'fecha_add' => true,
        'fecha_mod' => true
    ];
}
