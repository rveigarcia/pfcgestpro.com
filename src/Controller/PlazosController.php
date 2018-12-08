<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Plazos Controller
 *
 * @property \App\Model\Table\PlazosTable $Plazos
 *
 * @method \App\Model\Entity\Plazo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PlazosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function listar()
    {
   //     $plazos = $this->paginate($this->Plazos);
        $this->paginate = [
        'sortWhitelist' => [
            'id','id_proyecto', 'Proyectos.nombre_app', 'fecha_ini', 'fecha_fin'
            ]
        ];

        $plazos = $this->Plazos->damePlazosConTodo();
        $this->set('plazos', $this->paginate($plazos));
        $plazos-> toArray();

        $this->set(compact('plazos'));
    }

    /**
     * View method
     *
     * @param string|null $id Plazo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function ver($id = null)
    {
        $plazo = $this->Plazos->get($id, [
            'contain' => []
        ]);

        $this->set('plazo', $plazo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function crear()
    {
        $data = $this->loadModel('Proyectos')->dameProyectos();

        $plazo = $this->Plazos->newEntity();
        if ($this->request->is('post')) {
            $plazo = $this->Plazos->patchEntity($plazo, $this->request->getData());

            if ($this->Plazos->save($plazo)) {

                $this->Flash->success(__('The plazo has been saved.' . $plazo->id_proyecto));
                return $this->redirect(['action' => 'listar']);
            }
            $this->Flash->error(__('The plazo could not be saved. Please, try again.'));
        }

        $this->set(compact('plazo', 'data'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Plazo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function editar($id = null)
    {
        $data = $this->loadModel('Proyectos')->dameProyectos();

        $plazo = $this->Plazos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $plazo = $this->Plazos->patchEntity($plazo, $this->request->getData());
            if ($this->Plazos->save($plazo)) {
                $this->Flash->success(__('The plazo has been saved.'));

                return $this->redirect(['action' => 'listar']);
            }
            $this->Flash->error(__('The plazo could not be saved. Please, try again.'));
        }
        $this->set(compact('plazo', 'data'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Plazo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function eliminar($id = null)
    {
        $this->request->allowMethod(['post', 'eliminar']);
        $plazo = $this->Plazos->get($id);
        if ($this->Plazos->delete($plazo)) {
            $this->Flash->success(__('The plazo has been deleted.'));
        } else {
            $this->Flash->error(__('The plazo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'listar']);
    }

    public function compararInformes($id){

        $plazo = $this->Plazos->get($id);

        $carga = $this->loadModel('Plazos');

        $plazoConTodo = $carga->damePlazoConTodo($id);


        $estud = $carga->dameInformeEstudioContenidos($plazo->id_proyecto);
        $desa = $carga->dameInformeDesarroyoContenidos($plazo->id_proyecto);
        
        $para_comparar_teorica = array();
        $para_comparar_real = array();
        foreach ($estud[0]->contenidos as $c_est) {

            $parcial = array('e_ini' => $c_est->fecha_ini, 'e_fin' => $c_est->fecha_fin );
            array_push($para_comparar_teorica, $parcial);

        }  

        foreach ($desa[0]->contenidos as $c_desa) {

            $parcial = array('d_ini' => $c_desa->fecha_ini, 'd_fin' => $c_desa->fecha_fin );
            array_push($para_comparar_real, $parcial);

        } 

        $fechas = array();


    //    debug($estud[0][['contenidos'][0]][0]['Fases']['concepto']);

        $longitud = (count($para_comparar_teorica)) - 1;
        for ($i = 0; $i <= $longitud; $i++) {

            $tramo = [
                "idfase" => $estud[0][['contenidos'][0]][$i]['id_fase'],
                "fase" => $estud[0][['contenidos'][0]][$i]['Fases']['concepto'],
                "ini_estudio" => $para_comparar_teorica[$i]['e_ini'],
                "fin_estudio" => $para_comparar_teorica[$i]['e_fin'],
                "ini_desarrollo" => $para_comparar_real[$i]['d_ini'],
                "fin_desarrollo" => $para_comparar_real[$i]['d_fin'],
            ];
           
            array_push($tramo, $para_comparar_teorica[$i]['e_ini']);
            array_push($tramo, $para_comparar_teorica[$i]['e_fin']);
            array_push($tramo, $para_comparar_real[$i]['d_ini']);
            array_push($tramo, $para_comparar_real[$i]['d_fin']);

            array_push($fechas, $tramo);

        }  

        $this->set(compact('estud','desa','fechas','plazoConTodo'));
    }

}
