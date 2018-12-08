<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fases Controller
 *
 * @property \App\Model\Table\FasesTable $Fases
 *
 * @method \App\Model\Entity\Fase[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FasesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function listar()
    {
        $fases = $this->paginate($this->Fases);

        $this->set(compact('fases'));
    }

    /**
     * View method
     *
     * @param string|null $id Fase id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function ver($id = null)
    {
        $fase = $this->Fases->get($id, [
            'contain' => []
        ]);

        $this->set('fase', $fase);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function crear()
    {
        $fase = $this->Fases->newEntity();
        if ($this->request->is('post')) {
            $fase = $this->Fases->patchEntity($fase, $this->request->getData());
            if ($this->Fases->save($fase)) {
                $this->Flash->success(__('Los datos de la nueva fase han sido guardados.'));

                return $this->redirect(['action' => 'listar']);
            }
            $this->Flash->error(__('Algo ha fallado. Inténtelo de nuevo.'));
        }
        $this->set(compact('fase'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fase id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function editar($id = null)
    {
        $fase = $this->Fases->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fase = $this->Fases->patchEntity($fase, $this->request->getData());
            if ($this->Fases->save($fase)) {
                $this->Flash->success(__('Los datos de la fase han sido actualizados.'));

                return $this->redirect(['action' => 'listar']);
            }
            $this->Flash->error(__('Algo ha fallado. Inténtelo de nuevo.'));
        }
        $this->set(compact('fase'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fase id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function eliminar($id = null)
    {
        $this->request->allowMethod(['post', 'eliminar']);
        $fase = $this->Fases->get($id);
        if ($this->Fases->delete($fase)) {
            $this->Flash->success(__('La fase ha sido eliminada del registro.'));
        } else {
            $this->Flash->error(__('Algo ha fallado. Inténtelo de nuevo.'));
        }

        return $this->redirect(['action' => 'listar']);
    }
}
