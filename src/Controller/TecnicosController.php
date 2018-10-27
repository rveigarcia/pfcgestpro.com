<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Tecnicos Controller
 *
 * @property \App\Model\Table\TecnicosTable $Tecnicos
 *
 * @method \App\Model\Entity\Tecnico[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TecnicosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function listar()
    {
        $tecnicos = $this->paginate($this->Tecnicos);

        $this->set(compact('tecnicos'));
    }

    /**
     * View method
     *
     * @param string|null $id Tecnico id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function ver($id = null)
    {
        $tecnico = $this->Tecnicos->get($id, [
            'contain' => []
        ]);

        $this->set('tecnico', $tecnico);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function crear()
    {
        $data = $this->dameGrupos();

        $tecnico = $this->Tecnicos->newEntity();
        if ($this->request->is('post')) {
            $tecnico = $this->Tecnicos->patchEntity($tecnico, $this->request->getData());
            if ($this->Tecnicos->save($tecnico)) {
                $this->Flash->success(__('Los datos del nuevo técnico han sido guardados'));

                return $this->redirect(['action' => 'listar']);
            }
            $this->Flash->error(__('Algo ha fallado. Inténtelo de nuevo.'));
        }
        $this->set(compact('tecnico','data'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tecnico id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function editar($id = null)
    {
        $data = $this->dameGrupos();

        $tecnico = $this->Tecnicos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tecnico = $this->Tecnicos->patchEntity($tecnico, $this->request->getData());
            if ($this->Tecnicos->save($tecnico)) {
                $this->Flash->success(__('Los datos del técnico han sido acctualizados'));

                return $this->redirect(['action' => 'listar']);
            }
            $this->Flash->error(__('Algo ha fallado. Inténtelo de nuevo.'));
        }
        $this->set(compact('tecnico', 'data'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tecnico id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function eliminar($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tecnico = $this->Tecnicos->get($id);
        if ($this->Tecnicos->delete($tecnico)) {
            $this->Flash->success(__('El técnico ha sido eliminado del registro.'));
        } else {
            $this->Flash->error(__('Algo ha fallado. Inténtelo de nuevo..'));
        }

        return $this->redirect(['action' => 'listar']);
    }

    public function dameGrupos(){

        $grupos = TableRegistry::get('Grupos');

        $query = $grupos->find('list',[

            'keyField' => 'id', 
            'valueField' => 'alias'
        ]);

        $data = $query -> toArray(); 

        return $data;
    }
}
