<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Parciales Model
 *
 * @method \App\Model\Entity\Parciale get($primaryKey, $options = [])
 * @method \App\Model\Entity\Parciale newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Parciale[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Parciale|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Parciale|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Parciale patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Parciale[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Parciale findOrCreate($search, callable $callback = null, $options = [])
 */
class ParcialesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('parciales');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Plazos')
        ->setForeignKey('id_plazo')
        ->setDependent(false);

        $this->belongsTo('Fases')
        ->setForeignKey('id_fase')
        ->setDependent(false);

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('id_plazo')
            ->requirePresence('id_plazo', 'create')
            ->notEmpty('id_plazo');

        $validator
            ->integer('id_fase')
            ->requirePresence('id_fase', 'create')
            ->notEmpty('id_fase');

        $validator
            ->scalar('concepto')
            ->maxLength('concepto', 50)
            ->allowEmpty('concepto');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 200)
            ->allowEmpty('descripcion');

        $validator
            ->date('fecha_ini_teorica')
            ->allowEmpty('fecha_ini_teorica');

        $validator
            ->date('fecha_fin_teorica')
            ->allowEmpty('fecha_fin_teorica');

        $validator
            ->date('fecha_ini_tarea')
            ->allowEmpty('fecha_ini_tarea');

        $validator
            ->date('fecha_fin_tarea')
            ->allowEmpty('fecha_fin_tarea');

        $validator
            ->dateTime('fecha_add')
            ->allowEmpty('fecha_add');

        $validator
            ->dateTime('fecha_mod')
            ->allowEmpty('fecha_mod');

        return $validator;
    }

    public function beforeSave($event, $entity, $options) {

            if ($entity->isNew()) {

                $entity -> fecha_add = date("Y-m-d H:i:s"); 
            }else {
                $entity -> fecha_mod = date("Y-m-d H:i:s");
            }
            return true;
    }  
}
