<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Estados Controller
 *
 * @property \App\Model\Table\EstadosTable $Estados
 *
 * @method \App\Model\Entity\Estado[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EstadosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function listar()
    {
        $estados = $this->paginate($this->Estados);

        $this->set(compact('estados'));
    }

    /**
     * View method
     *
     * @param string|null $id Estado id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function ver($id = null)
    {
        $estado = $this->Estados->get($id, [
            'contain' => []
        ]);

        $this->set('estado', $estado);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function crear()
    {
        $estado = $this->Estados->newEntity();
        if ($this->request->is('post')) {
            $estado = $this->Estados->patchEntity($estado, $this->request->getData());
            if ($this->Estados->save($estado)) {
                $this->Flash->success(__('Los datos del nuevo estado han sido guardados.'));

                return $this->redirect(['action' => 'listar']);
            }
            $this->Flash->error(__('Algo ha fallado. Inténtelo de nuevo.'));
        }
        $this->set(compact('estado'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Estado id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function editar($id = null)
    {
        $estado = $this->Estados->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estado = $this->Estados->patchEntity($estado, $this->request->getData());
            if ($this->Estados->save($estado)) {
                $this->Flash->success(__('Los datos del estado han sido actualizados.'));

                return $this->redirect(['action' => 'listar']);
            }
            $this->Flash->error(__('Algo ha fallado. Inténtelo de nuevo.'));
        }
        $this->set(compact('estado'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Estado id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function eliminar($id = null)
    {
        $this->request->allowMethod(['post', 'eliminar']);
        $estado = $this->Estados->get($id);
        if ($this->Estados->delete($estado)) {
            $this->Flash->success(__('El estado ha sido eliminado del registro.'));
        } else {
            $this->Flash->error(__('Algo ha fallado. Inténtelo de nuevo'));
        }

        return $this->redirect(['action' => 'listar']);
    }
}
