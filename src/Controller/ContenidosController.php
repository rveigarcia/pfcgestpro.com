<?php
namespace App\Controller;

use App\Controller\AppController;
// use Cake\ORM\TableRegistry;

/**
 * Contenidos Controller
 *
 * @property \App\Model\Table\ContenidosTable $Contenidos
 *
 * @method \App\Model\Entity\Contenido[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContenidosController extends AppController
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
            'id','id_tecnico','Tecnicos.nombre','id_informe', 'Proyectos.nombre_app','id_fase', 'Fases.concepto'
            ]
        ];
     //   $contenidos = $this->paginate($this->Contenidos);
        $contenidos = $this->Contenidos->dameContenidosConTodo();
        $this->set('contenidos', $this->paginate($contenidos));
        $contenidos -> toArray();

        $this->set(compact('contenidos'));
    }

    /**
     * View method
     *
     * @param string|null $id Contenido id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function ver($id = null)
    {

        $miscontenidos = $this->Contenidos->dameContenidosInformeEstidio();
        $miscontenidos -> toArray();

        $contenido = $this->Contenidos->get($id, [
            'contain' => []
        ]);

   //    debug($contenidos); 

      //  $this->set('contenido', $contenido);
        $this->set(compact('contenido','miscontenidos'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
 /*   public function crear($idGrupo = null)
    {
        $dataA = $this->loadModel('Tecnicos')->dameTecnicosPosibles($idGrupo);
        $dataB = $this->loadModel('Informes')->dameInformesConTipo();
        $dataC = $this->loadModel('Fases')->dameFases();

        $contenido = $this->Contenidos->newEntity();
        if ($this->request->is('post')) {
            
            $contenido = $this->Contenidos->patchEntity($contenido, $this->request->getData());

            if ($this->Contenidos->save($contenido)) {
                $this->Flash->success(__('Los datos del nuevo contenido han sido guardados.'));

                return $this->redirect(['action' => 'listar']);
            }
            $this->Flash->error(__('Algo ha fallado. Inténtelo de nuevo.'));
        }
        $this->set(compact('contenido', 'dataA', 'dataB', 'dataC'));
    }  */


       public function crear($idGrupo = null)
    {
        $idInforme = $this->request->getData('idInforme');
   //     debug($idInforme);

        $carga = $this->loadModel('Informes');

        $informeSeleccionado = $carga->dameGrupoDeInforme($idInforme);
        $informeSeleccionado->toArray();

        foreach ($informeSeleccionado as $i) {
            if(isset($i->proyecto->id_grupo)){

                $idGrupo = $i->proyecto->id_grupo;
            }
        }

        $dataA = $this->loadModel('Tecnicos')->dameTecnicosPosibles($idGrupo);
        $dataB = $carga->dameInformesConTipo();
        $dataC = $this->loadModel('Fases')->dameFases();

        $contenido = $this->Contenidos->newEntity();

        $contenido = $this->Contenidos->patchEntity($contenido, $this->request->getData());

            if ($this->Contenidos->save($contenido)) {
                $this->Flash->success(__('Los datos del nuevo contenido han sido guardados.'));

                return $this->redirect(['action' => 'listar']);
            }
            if ($idGrupo == null) {
                $this->Flash->error(__('Algo ha fallado. Inténtelo de nuevo.'));                
            }
            $this->set(compact('contenido', 'dataA', 'dataB', 'dataC','idInfo'));
    }



    public function seleccionarinformeparacrear(){

        $informes = $this->loadModel('Informes')->dameInformesConTipo();
        $this->set(compact('informes'));

    }
/*
    public function creardesdecontenido()
    {

        $dato = $this->request->getData();

        $carga = $this->loadModel('Contenidos');
        $valor = $dato['idInforme'];

        $dato2 = $carga->dameInformeParaCrearContenido($valor);

        $dataA = $this->loadModel('Tecnicos')->dameTecnicosPosibles($dato2[0]->proyecto->id_grupo);
        $dataB = $this->loadModel('Informes')->dameInformesConTipo();
        $dataC = $this->loadModel('Fases')->dameFases();

        

            $contenido = $this->Contenidos->newEntity();
            if ($this->request->is('post')) {
                
                $contenido = $this->Contenidos->patchEntity($contenido, $this->request->getData());



                if ($this->Contenidos->save($contenido)) {
                    $this->Flash->success(__('Los datos del nuevo contenido han sido guardados.'));

                    return $this->redirect(['action' => 'listar']);
                }
                if($valor != null){

                }else{
                    $this->Flash->error(__('Algo ha fallado. Inténtelo de nuevo.'));
                }
                $this->Flash->error(__('Algo ha fallado. Inténtelo de nuevo.'));
            }
            $this->set(compact('contenido', 'dataA', 'dataB', 'dataC'));

        
    }    */


    /**
     * Edit method
     *
     * @param string|null $id Contenido id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function editar($id = null)
    {
        $dataA = $this->loadModel('Tecnicos')->dameTecnicos();
        $dataB = $this->loadModel('Informes')->dameInformes();
        $dataC = $this->loadModel('Fases')->dameFases();

        $contenido = $this->Contenidos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contenido = $this->Contenidos->patchEntity($contenido, $this->request->getData());
            if ($this->Contenidos->save($contenido)) {
                $this->Flash->success(__('Los datos del contenido han sido actualizados.'));

                return $this->redirect(['action' => 'listar']);
            }
            $this->Flash->error(__('Algo ha fallado. Inténtelo de nuevo.'));
        }
        $this->set(compact('contenido', 'dataA', 'dataB', 'dataC'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contenido id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function eliminar($id = null)
    {
        $this->request->allowMethod(['post', 'eliminar']);
        $contenido = $this->Contenidos->get($id);
        if ($this->Contenidos->delete($contenido)) {
            $this->Flash->success(__('El contenido ha sido eliminado del registro.'));
        } else {
            $this->Flash->error(__('Algo ha fallado. Inténtelo de nuevo.'));
        }

        return $this->redirect(['action' => 'listar']);
    }

}
