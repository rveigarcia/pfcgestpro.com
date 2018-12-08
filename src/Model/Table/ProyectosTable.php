<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Proyectos Model
 *
 * @method \App\Model\Entity\Proyecto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Proyecto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Proyecto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Proyecto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Proyecto|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Proyecto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Proyecto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Proyecto findOrCreate($search, callable $callback = null, $options = [])
 */
class ProyectosTable extends Table
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

        $this->setTable('proyectos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Grupos',[
            'className' => 'Proyectos.Grupos'
        ])
        ->setForeignKey('id_grupo')
        ->setJoinType('INNER')
        ->setDependent(false);

        $this->belongsTo('Estados')
        ->setForeignKey('id_estado')
        ->setJoinType('INNER')
        ->setDependent(false);

        $this->belongsTo('Clientes')
            ->setForeignKey('id_cliente')
            ->setJoinType('INNER')
            ->setDependent(false);


        $this->hasOne('Plazos')
       ->setForeignKey('id_proyecto')
        ->setDependent(false);

        $this->hasMany('Informes')
            ->setForeignKey('id_proyecto')
            ->setDependent(false);  

         

    }  

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instSance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('id_grupo')
            ->requirePresence('id_grupo', 'create')
            ->notEmpty('id_grupo');

        $validator
            ->integer('id_estado')
            ->requirePresence('id_estado', 'create')
            ->notEmpty('id_estado');

        $validator
            ->integer('id_cliente')
            ->requirePresence('id_cliente', 'create')
            ->notEmpty('id_cliente');

        $validator
            ->scalar('nombre_app')
            ->maxLength('nombre_app', 60)
            ->notEmpty('nombre_app');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 150)
            ->notEmpty('descripcion');

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

    public function dameProyectosConTodo(){

        $query = $this->find('all')->contain(['Grupos','Estados','Clientes','Informes.Contenidos','PLazos']);
   //     $query = $this->find('all');
  
//        $data = $query -> toArray();  // Si pasamos el return como array no funcione el Paginator

        return $query;
    }

    public function dameProyectos(){

        $query = $this->find('list',[

            'keyField' => 'id', 
            'valueField' => 'nombre_app'
        ]);

        $data = $query -> toArray(); 

          return $data;         
    }

    public function grupoTieneDesarrollo($valor_estado, $valor_id_grupo){

        $resultado = false;

        $lista = $this->find()->toArray();

        if($valor_estado == 3){

            foreach ($lista as $p) {

                if($p->id_grupo == $valor_id_grupo && $p->id_estado == 3 ){

                    $resultado = true;
                }
            }
        }
        return $resultado;
    }
}
