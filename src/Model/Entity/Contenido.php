<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contenido Entity
 *
 * @property int $id
 * @property int $id_tecnico
 * @property int $id_informe
 * @property int $id_fase
 * @property string $concepto
 * @property string $descripcion
 * @property \Cake\I18n\FrozenDate $fecha_ini
 * @property \Cake\I18n\FrozenDate $fecha_fin
 * @property \Cake\I18n\FrozenTime $fecha_add
 * @property \Cake\I18n\FrozenTime $fecha_mod
 */
class Contenido extends Entity
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
        'id_tecnico' => true,
        'id_informe' => true,
        'id_fase' => true,
        'concepto' => true,
        'descripcion' => true,
        'fecha_ini' => true,
        'fecha_fin' => true,
        'fecha_add' => true,
        'fecha_mod' => true
    ];

    // prueva de virtual propieters
/*    protected function _getCampoCalculado()
    {
        return $this->_properties['fecha_ini'] . '  ' .
               $this->_properties['fecha_fin'];
    }  */
}
