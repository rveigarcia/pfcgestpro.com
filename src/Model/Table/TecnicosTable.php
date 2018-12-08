<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tecnicos Model
 *
 * @method \App\Model\Entity\Tecnico get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tecnico newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tecnico[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tecnico|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tecnico|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tecnico patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tecnico[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tecnico findOrCreate($search, callable $callback = null, $options = [])
 */
class TecnicosTable extends Table
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

        $this->setTable('tecnicos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Grupos')
            ->setForeignKey('id_grupo')
      //      ->setProperty('emplea')
            ->setJoinType('INNER')
            ->setDependent(false);  

        $this->belongsTo('Categorias')
            ->setForeignKey('id_categoria')
      //      ->setProperty('emplea')
            ->setJoinType('INNER')
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
            ->integer('id_grupo')
            ->requirePresence('id_grupo', 'create')
            ->notEmpty('id_grupo');

        $validator
            ->integer('id_categoria')
            ->requirePresence('id_categoria', 'create')
            ->notEmpty('id_categoria');    

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

    public function dameTecnicos(){


        $query = $this->find('list',[

            'keyField' => 'id', 
            'valueField' => function ($tecnico) {

                $valor = $tecnico->nombre . ' ' . $tecnico->apellidos;
                return $valor;
            }
        ]);

        $data = $query -> toArray(); 

        return $data;
    }

        public function dameTecnicosPosibles($idGrupo){

                $query = $this->find('list',[

            'keyField' => 'id', 
            'valueField' => function ($tecnico) {

                $valor = $tecnico->nombre . ' ' . $tecnico->apellidos;
                return $valor;
            }
        ])->where(['id_grupo' => $idGrupo]);    

      //  $query ->where(['id_grupo' => $idGrupo]);      
        $data = $query -> toArray(); 

        return $data;

        }


    public function dameTecnicosConCategorias(){

        $query = $this->find('all')->contain(['Categorias', 'Grupos']);

        return $query;
    } 
}
