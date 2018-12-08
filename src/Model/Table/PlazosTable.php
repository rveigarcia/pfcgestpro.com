<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

use Cake\ORM\TableRegistry;
use Cake\I18n\Date;

/**
 * Plazos Model
 *
 * @method \App\Model\Entity\Plazo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Plazo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Plazo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Plazo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Plazo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Plazo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Plazo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Plazo findOrCreate($search, callable $callback = null, $options = [])
 */
class PlazosTable extends Table
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

        $this->setTable('plazos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasOne('Proyectos')
            ->setBindingKey('id_proyecto')
            ->setForeignKey('id')
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
            ->date('fecha_ini')
            ->allowEmpty('fecha_ini');

        $validator
            ->date('fecha_fin')
            ->allowEmpty('fecha_fin');

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

                $fecha1 = new Date();
                $fecha1->format('Y-m-d');
                $fecha1->setDate(2020, 1, 1);

                $fecha2 = new Date();
                $fecha2->format('Y-m-d');
                $fecha2->setDate(2015, 1, 1);

                $query = $this->dameInformeEstudioContenidos($entity->id_proyecto);        
                        
                foreach ($query[0]->contenidos as $c) {
                    
                    if($c->fecha_ini < $fecha1){
                        $fecha1 = $c->fecha_ini; 
                    }
                    if($c->fecha_fin > $fecha2){
                        $fecha2 = $c->fecha_fin; 
                    }
                }
                $entity -> fecha_ini = $fecha1; 
                $entity -> fecha_fin = $fecha2; 
            }else {
                $entity -> fecha_mod = date("Y-m-d H:i:s");
            }
            return true;
        
    }

        public function damePlazos(){

        $query = $this->find('list',[

            'keyField' => 'id', 
            'valueField' => 'id_proyecto'
        ]);

        $data = $query -> toArray(); 

        return $data;
    }

    public function damePlazosConTodo(){

        $query = $this->find('all')->contain(['Proyectos.Informes.Contenidos']);
  //      $query = $this->find('all');

        return $query;
    }
// no lo uso
    public function damePlazoConTodo($id){

        $query = $this->find('all')
            ->where(['Plazos.id =' => $id])
            ->contain(['Proyectos.Informes.Contenidos.fases']);

        return $query;
    }

    public function dameInformeEstudioContenidos($valorProyecto){

        $query = TableRegistry::get('Informes')->find('all', array('conditions' => array(

            'Informes.id_proyecto = ' => $valorProyecto,
            'Informes.estudio = ' => 1,
            ), 'contain' => array('Contenidos.fases', 'Proyectos')))->toArray();

        return $query;
    }

    public function dameInformeDesarroyoContenidos($valorProyecto){

        $query = TableRegistry::get('Informes')->find('all', array('conditions' => array(

            'Informes.id_proyecto = ' => $valorProyecto,
            'Informes.estudio = ' => 0,
            ), 'contain' => array('Contenidos.fases', 'Proyectos')))->toArray();

        return $query;
    }   
}
