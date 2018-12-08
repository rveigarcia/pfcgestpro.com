<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Proyecto Entity
 *
 * @property int $id
 * @property int $id_grupo
 * @property int $id_estado
 * @property int $id_cliente
 * @property string $nombre_app
 * @property string $descripcion
 * @property \Cake\I18n\FrozenTime $fecha_add
 * @property \Cake\I18n\FrozenTime $fecha_mod
 */
class Proyecto extends Entity
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
        'id_estado' => true,
        'id_cliente' => true,
        'nombre_app' => true,
        'descripcion' => true,
        'fecha_add' => true,
        'fecha_mod' => true
    ];
}
