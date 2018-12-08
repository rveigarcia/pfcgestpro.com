<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
// App::uses('Proyectos', 'Model')

/**
 * Informe Entity
 *
 * @property int $id
 * @property int $id_proyecto
 * @property string $estudio
 * @property \Cake\I18n\FrozenDate $fecha_ini
 * @property \Cake\I18n\FrozenDate $fecha_fin
 * @property \Cake\I18n\FrozenTime $fecha_add
 * @property \Cake\I18n\FrozenTime $fecha_mod
 */
class Informe extends Entity
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
        'estudio' => true,
        'fecha_add' => true,
        'fecha_mod' => true,
    ];

/*        protected function _getInicio()
    {
        
        
        return $this->_properties['fInicio'] = 'Algo';
    } 

    protected function _getFin()
    {
        return $this->_properties['fFin'];
    }   */
}
