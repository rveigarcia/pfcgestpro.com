<?php
namespace App\Controller;

use App\Controller\AppController; 
// use Cake\ORM\TableRegistry;
// use App\Model\Proyectos;


/**
 * Informes Controller
 *
 * @property \App\Model\Table\InformesTable $Informes
 *
 * @method \App\Model\Entity\Informe[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InformesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function listar()
    {

        $this->paginate = [
        'sortWhitelist' => [
            'id','id_proyecto','Proyectos.nombre_app','estudio'
            ]
        ];

//        $informes = $this->paginate($this->Informes);
        $informes = $this->Informes->dameInformesConTodo();
        $this->set('informes', $this->paginate($informes));
        $informes -> toArray();


        $this->set(compact('informes'));
    }

    /**
     * View method
     *
     * @param string|null $id Informe id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function ver($id = null)
    {
        $informe = $this->Informes->get($id, [
            'contain' => ['Contenidos','Proyectos']
        ]);

  //      $informes = $this->Informes->dameInfomeContenidoEstudioInicialFinal($informe->proyecto->nombre_app);
  //      $informes->toArray();
     //   debug($informes);

        $this->set('informe', $informe);
  //      $this->set(compact('informe','informes'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */

   public function crear()
    {
        
  // $data = TableRegistry::get('Proyectos')->dameProyectos();;
        $data = $this->loadModel('Proyectos')->dameProyectos(); 
        $informe = $this->Informes->newEntity();

        if ($this->request->is('post')) {
            $informe = $this->Informes->patchEntity($informe, $this->request->getData());

            if($this->Informes->existeInforme($informe->estudio, $informe->id_proyecto)){
                if( $informe->estudio == '0'){

                    $this->Flash->error(__('Ya existe un desarrollo para ese proyecto'));

                }else{
                    $this->Flash->error(__('Ya existe un estudio para ese proyecto'));
                    
                }

            }else{

                if ($this->Informes->save($informe)) {

                    $this->Flash->success(__('Los datos del nuevo informe han sido guardados.'));

                    return $this->redirect(['action' => 'listar']);
                }
                $this->Flash->error(__('Algo ha fallado. Inténtelo de nuevo.'));
            }
  
        }
        $this->set(compact('informe', 'data'));
    }



    /**
     * Edit method
     *
     * @param string|null $id Informe id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function editar($id = null)
    {
        $data = $this->loadModel('Proyectos')->dameProyectos();

        $informe = $this->Informes->get($id, [
            'contain' => []

        ]);
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            $informe = $this->Informes->patchEntity($informe, $this->request->getData());

         //   $dataB = $this->loadModel('Proyectos')->dameProyecto();
            

                if ($this->Informes->save($informe)) {
                    
                    $this->Flash->success(__('Los datos del nuevo informe han sido guardados.'));

                    return $this->redirect(['action' => 'listar']);
                }
                $this->Flash->error(__('Algo ha fallado. Inténtelo de nuevo.'));
        }
       
        $dataB = $data[$informe->id_proyecto];
  //      debug($dataB);
        $this->set(compact('informe', 'data', 'dataB'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Informe id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function eliminar($id = null)
    {
        $this->request->allowMethod(['post', 'eliminar']);
        $informe = $this->Informes->get($id);
        if ($this->Informes->delete($informe)) {
            $this->Flash->success(__('El informe ha sido eliminado del registro.'));
        } else {
            $this->Flash->error(__('Algo ha fallado. Inténtelo de nuevo.'));
        }

        return $this->redirect(['action' => 'listar']);
    }
}
