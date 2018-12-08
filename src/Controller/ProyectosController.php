<?php
namespace App\Controller;

use App\Controller\AppController;
 use Cake\ORM\TableRegistry;

/**
 * Proyectos Controller
 *
 * @property \App\Model\Table\ProyectosTable $Proyectos
 *
 * @method \App\Model\Entity\Proyecto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProyectosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */

    


    public function listar()
    {
    //    $proyectos = $this->paginate($this->Proyectos);
     //   $nombres_grupo = $dataA = $this->loadModel('Grupos')->dameGrupos();
        // modificación necesaria para poder emplear el sort para el atributo de grupo en listar.ctp
        $this->paginate = [
        'sortWhitelist' => [
            'id','id_grupo','id_estado','id_cliente','nombre_app','descripcion','fecha_add','fecha_mod','Grupos.alias','Clientes.nombre', 'Estados.valor'
            ]
        ];

        $proyectos = $this->Proyectos->dameProyectosConTodo();
        $this->set('proyectos', $this->paginate($proyectos));
        $proyectos -> toArray();  
        $this->set(compact('proyectos'));
    }

    /**
     * View method
     *
     * @param string|null $id Proyecto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function ver($id = null)
    {
        $proyecto = $this->Proyectos->get($id, [
            'contain' => []
        ]);

        $this->set(compact('proyecto'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function crear()
    {
        $dataA = $this->loadModel('Grupos')->dameGrupos();
        $dataB = $this->loadModel('Estados')->dameEstados();
        $dataC = $this->loadModel('Clientes')->dameClientes();

        $proyecto = $this->Proyectos->newEntity();
        if ($this->request->is('post')) {
            $proyecto = $this->Proyectos->patchEntity($proyecto, $this->request->getData());

            if($this->Proyectos->grupoTieneDesarrollo($proyecto->id_estado, $proyecto->id_grupo)){

                $this->Flash->error(__('El grupo seleccionado ya tiene asociado un proyecto en desarrollo.'));

            }else{

                if ($this->Proyectos->save($proyecto)) {
                    $this->Flash->success(__('Los datos del nuevo proyecto han sido guardados.'));

                    return $this->redirect(['action' => 'listar']);
                }
                $this->Flash->error(__('Algo ha fallado. Inténtelo de nuevo.'));
            }
        }
        $this->set(compact('proyecto','dataA', 'dataB', 'dataC'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Proyecto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function editar($id = null)
    {
        $dataA = $this->loadModel('Grupos')->dameGrupos();
        $dataB = $this->loadModel('Estados')->dameEstados();
        $dataC = $this->loadModel('Clientes')->dameClientes();

        $proyecto = $this->Proyectos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proyecto = $this->Proyectos->patchEntity($proyecto, $this->request->getData());

            if($this->Proyectos->grupoTieneDesarrollo($proyecto->id_estado, $proyecto->id_grupo)){

                $this->Flash->error(__('El grupo seleccionado ya tiene asociado un proyecto en desarrollo.'));

            }else{

                if ($this->Proyectos->save($proyecto)) {
                    $this->Flash->success(__('Los datos del proyecto han sido actualizados.'));

                    return $this->redirect(['action' => 'listar']);
                }
                $this->Flash->error(__('Algo ha fallado. Inténtelo de nuevo.'));
            }
        }

        $this->set(compact('proyecto', 'dataA', 'dataB', 'dataC'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Proyecto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function eliminar($id = null)
    {
        $this->request->allowMethod(['post', 'eliminar']);
        $proyecto = $this->Proyectos->get($id);
        if ($this->Proyectos->delete($proyecto)) {
            $this->Flash->success(__('El proyecto ha sido eliminado del registro.'));
        } else {
            $this->Flash->error(__('Algo ha fallado. Inténtelo de nuevo.'));
        }

        return $this->redirect(['action' => 'listar']);
    }
}
