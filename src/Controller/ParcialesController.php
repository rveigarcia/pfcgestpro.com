<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Parciales Controller
 *
 * @property \App\Model\Table\ParcialesTable $Parciales
 *
 * @method \App\Model\Entity\Parciale[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ParcialesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function listar()
    {
        $parciales = $this->paginate($this->Parciales);

        $this->set(compact('parciales'));
    }

    /**
     * View method
     *
     * @param string|null $id Parciale id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function ver($id = null)
    {
        $parciale = $this->Parciales->get($id, [
            'contain' => []
        ]);

        $this->set('parciale', $parciale);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function crear()
    {
        $dataA = $this->loadModel('Plazos')->damePlazos();
        $dataB = $this->loadModel('Fases')->dameFases();

        $parciale = $this->Parciales->newEntity();
        if ($this->request->is('post')) {
            $parciale = $this->Parciales->patchEntity($parciale, $this->request->getData());
            if ($this->Parciales->save($parciale)) {
                $this->Flash->success(__('Los datos del nuevo parcial han sido guardados.'));

                return $this->redirect(['action' => 'listar']);
            }
            $this->Flash->error(__('Algo ha fallado. Inténtelo de nuevo.'));
        }
        $this->set(compact('parciale', 'dataA', 'dataB'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Parciale id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function editar($id = null)
    {
        $dataA = $this->loadModel('Plazos')->damePlazos();
        $dataB = $this->loadModel('Fases')->dameFases();

        $parciale = $this->Parciales->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $parciale = $this->Parciales->patchEntity($parciale, $this->request->getData());
            if ($this->Parciales->save($parciale)) {
                $this->Flash->success(__('Los datos del parcial han sido registrados.'));

                return $this->redirect(['action' => 'listar']);
            }
            $this->Flash->error(__('Algo ha fallado. Inténtelo de nuevo.'));
        }
        $this->set(compact('parciale', 'dataA', 'dataB'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Parciale id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function eliminar($id = null)
    {
        $this->request->allowMethod(['post', 'eliminar']);
        $parciale = $this->Parciales->get($id);
        if ($this->Parciales->delete($parciale)) {
            $this->Flash->success(__('El parcial ha sido eliminado del registro.'));
        } else {
            $this->Flash->error(__('Algo ha fallado. Inténtelo de nuevo.'));
        }

        return $this->redirect(['action' => 'listar']);
    }
}
