<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

use Cake\I18n\Date;
use Cake\ORM\TableRegistry;

/**
 * Contenidos Model
 *
 * @method \App\Model\Entity\Contenido get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contenido newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Contenido[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contenido|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contenido|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contenido patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contenido[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contenido findOrCreate($search, callable $callback = null, $options = [])
 */
class ContenidosTable extends Table
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

        $this->setTable('contenidos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Tecnicos')
            ->setForeignKey('id_tecnico')
            ->setDependent(false);  

        $this->belongsTo('Fases')
            ->setForeignKey('id_fase')
            ->setDependent(false);    

        $this->belongsTo('Informes')
         //   ->setBindingKey('Informe.id')
            ->setForeignKey('id_informe')
     //       ->setJoinType('INNER')
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
            ->integer('id_tecnico')
            ->requirePresence('id_tecnico', 'create')
            ->notEmpty('id_tecnico');

        $validator
            ->integer('id_informe')
            ->requirePresence('id_informe', 'create')
            ->notEmpty('id_informe');

        $validator
            ->integer('id_fase')
            ->requirePresence('id_fase', 'create')
            ->notEmpty('id_fase');

        $validator
            ->scalar('concepto')
            ->maxLength('concepto', 30)
            ->notEmpty('concepto');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 200)
            ->notEmpty('descripcion');

        $validator
            ->date('fecha_ini')
            ->notEmpty('fecha_ini');

        $validator
            ->date('fecha_fin')
            ->notEmpty('fecha_fin');

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

    public function dameContenidosConTodo(){

        $query = $this->find('all')->contain(['Tecnicos','Fases','Informes.Proyectos']);

        return $query;
    }
/*
    public function dameContenidoInicialFinal(){

        $query = $this->find('all')
            ->where(['Contenidos.id_informe' => 72])
            ->contain(['Informes']);

        return $query;
    }  */

/*    public function dameFechaInicial(){

        $fecha_ini = new Date();
        $fecha_ini->format('Y-m-d');
        $fecha_ini->setDate(2018, 01, 01);

        $query = $this->find('all')
            ->where([])   


    } */

    public function dameContenidosInformeEstidio(){

        $query = $this->find('all')
            ->where(['Contenidos.id_informe' => 72])
            ->contain(['Informes']);    

        return $query;
    }

    public function dameInformeParaCrearContenido($idInforme){

        $query = TableRegistry::get('Informes')->find('all')
            ->where(['Informes.id' => $idInforme])
            ->contain(['Proyectos']);

        return $query->toArray();    
    }





}
