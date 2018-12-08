<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jefes Model
 *
 * @method \App\Model\Entity\Jefe get($primaryKey, $options = [])
 * @method \App\Model\Entity\Jefe newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Jefe[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Jefe|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Jefe|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Jefe patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Jefe[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Jefe findOrCreate($search, callable $callback = null, $options = [])
 */
class JefesTable extends Table
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

        $this->setTable('jefes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        
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
            ->scalar('nombre')
            ->maxLength('nombre', 20)
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->scalar('apellidos')
            ->maxLength('apellidos', 80)
            ->requirePresence('apellidos', 'create')
            ->notEmpty('apellidos');

        $validator
            ->scalar('direccion')
            ->maxLength('direccion', 100)
            ->requirePresence('direccion', 'create')
            ->notEmpty('direccion');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->dateTime('fecha_add')
            ->allowEmpty('fecha_add');

        $validator
            ->dateTime('fecha_mod')
            ->allowEmpty('fecha_mod');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }

    public function beforeSave($event, $entity, $options) {

            if ($entity->isNew()) {

                $entity -> fecha_add = date("Y-m-d H:i:s"); 
            }else {
                $entity -> fecha_mod = date("Y-m-d H:i:s");
            }
            return true;
        
    } 

    public function dameJefes(){

        $query = $this->find('list',[

            'keyField' => 'id', 
            'valueField' => function ($jefe) {

                $valor = $jefe->nombre . ' ' . $jefe->apellidos;
                return $valor;
            }
        ]);

        $data = $query -> toArray(); 

        return $data;
    } 
}
