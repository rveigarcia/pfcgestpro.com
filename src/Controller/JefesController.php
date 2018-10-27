<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Jefes Controller
 *
 * @property \App\Model\Table\JefesTable $Jefes
 *
 * @method \App\Model\Entity\Jefe[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class JefesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function listar()
    {
        $jefes = $this->paginate($this->Jefes);

        $this->set(compact('jefes'));
    }

    /**
     * View method
     *
     * @param string|null $id Jefe id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function ver($id = null)
    {
        $jefe = $this->Jefes->get($id, [
            'contain' => []
        ]);

        $this->set('jefe', $jefe);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function crear()
    {
        $jefe = $this->Jefes->newEntity();
        if ($this->request->is('post')) {
            $jefe = $this->Jefes->patchEntity($jefe, $this->request->getData());
            if ($this->Jefes->save($jefe)) {
                $this->Flash->success(__('Los datos de el nuevo jefe de grupo han sido guardados.'));

                return $this->redirect(['action' => 'listar']);
            }
            $this->Flash->error(__('Algo ha fallado. Inténtelo de nuevo.'));
        }
        $this->set(compact('jefe'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Jefe id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function editar($id = null)
    {
        $jefe = $this->Jefes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jefe = $this->Jefes->patchEntity($jefe, $this->request->getData());
            if ($this->Jefes->save($jefe)) {
                $this->Flash->success(__('The jefe has been saved.'));

                return $this->redirect(['action' => 'listar']);
            }
            $this->Flash->error(__('Algo ha fallado. Inténtelo de nuevo'));
        }
        $this->set(compact('jefe'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Jefe id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function eliminar($id = null)
    {
        $this->request->allowMethod(['post', 'eliminar']);
        $jefe = $this->Jefes->get($id);
        if ($this->Jefes->delete($jefe)) {
            $this->Flash->success(__('El jefe de grupo ha sido eliminado del registro.'));
        } else {
            $this->Flash->error(__('Algo ha fallado. Inténtelo de nuevo.'));
        }

        return $this->redirect(['action' => 'listar']);
    }
}
