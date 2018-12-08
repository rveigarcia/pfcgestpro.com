<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

use Cake\ORM\TableRegistry;

/**
 * Informes Model
 *
 * @method \App\Model\Entity\Informe get($primaryKey, $options = [])
 * @method \App\Model\Entity\Informe newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Informe[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Informe|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Informe|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Informe patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Informe[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Informe findOrCreate($search, callable $callback = null, $options = [])
 */
class InformesTable extends Table
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

        $this->setTable('informes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Proyectos')
        ->setBindingKey('id')
        ->setForeignKey('id_proyecto')
        ->setJoinType('INNER')
        ->setDependent(false);

       $this->hasMany('Contenidos')
            ->setForeignKey('id_informe')
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
            ->integer('id_proyecto')
            ->requirePresence('id_proyecto', 'create')
            ->notEmpty('id_proyecto');

        $validator
            ->scalar('estudio')
            ->maxLength('estudio', 1)
            ->notEmpty('estudio');

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

    public function dameInformes(){

        $query = $query = $this->find('list',[
            'keyField' => 'id', 
            'valueField' => 'proyecto.nombre_app'

            ])->contain(['Proyectos']);

        $data = $query -> toArray(); 

        return $data;
    }

    public function dameInformesConTipo(){

        $query = $query = $this->find('list',[
            'keyField' => 'id', 
            'valueField' => function ($informe) {

                if($informe->estudio == 0){
                    $tipoEstudio = '(desarrollo)';
                }else{
                    $tipoEstudio = '(estudio)';
                }

                $valor =  $informe->proyecto->nombre_app . ' ' . $tipoEstudio;
                return $valor;
            }])->contain(['Proyectos']);

        $data = $query -> toArray(); 

        return $data;
    }

    public function existeInforme ($valor_tipo, $valor_id_proyecto){

        $resultado = false;

        $lista = $this->find()->toArray();

        if($valor_tipo == 0){

             foreach ($lista as $i) {

                if ($i->id_proyecto == $valor_id_proyecto && $i->estudio == 0) {
                    $resultado = true;
                }
            }
        }else{

            foreach ($lista as $i) {

                if ($i->id_proyecto == $valor_id_proyecto && $i->estudio == 1) {
                    $resultado = true;
                }
            }
        }
        return $resultado;
    }

    public function dameInformesConTodo(){

        $query = $this->find('all')->contain(['Proyectos','Contenidos']);

        return $query;
    }

    public function dameInformesEstudioConSusContenidos($valor){
        $query = $this
            ->find()
      //      ->select(['id', 'name'])
            ->where(['id =' => $valor])
        //    ->order(['created' => 'ASC'])
            ->contain(['Contenidos']);

        return $query;    
    }

 /*   public function dameInfomeContenidoEstudioInicialFinal($valorNombre){

        $query = $this->find('all')
    //        ->where(['Proyectos.nombre_app' => $nombre])
            ->where(['Proyectos.nombre_app' => $valorNombre]) &&(['Informes.estudio' => 1])
            ->contain(['Proyectos','Contenidos']);

        return $query;  
    }   */

    public function dameContenidosDeInforme($valorIdInforme){

//        $query = $this->find('all','conditions' => array('Informes.id = ' => $valorIdInforme));

        $query = TableRegistry::get('Informes')->find('all', array('fields' => array('Informes.id'), 'conditions' => array(

            'Informes.id = ' => $valorIdInforme,
            ), 'order' => array('Informes.id DESC'))); 

    //        ->where(['Proyectos.nombre_app =' => $nombreProyecto]) && (['Informes.estudio =' => 1]);
        //    ->contain(['Proyectos','Contenidos']);

        return $query;     
    }

    public function dameGrupoDeInforme($idInforme){

        $query = $this->find('all')
       //     ->select(['Informes.proyecto.id_grupo'])
            ->where(['Informes.id =' => $idInforme])
            ->contain(['Proyectos']);

        return $query;

    }
}
