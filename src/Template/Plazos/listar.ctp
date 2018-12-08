<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Plazo[]|\Cake\Collection\CollectionInterface $plazos
 */
?>
<div class="container-fluid">
    <div class="panel-heading">
        <div class="panel-title">Plazos registrados</div>
        <button class="btn btn-primary"><?= $this->Html->link(__('Crear'), ['action' => 'crear']) ?> </button>
    </div>
    <div class="panel-body table-responsive">
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
            <thead>
                <tr>
                    <th scope="col">
                        <?= $this->Paginator->sort('id', ['label' => 'ID']) ?>
                    </th>
                    <th scope="col">
                        <?= $this->Paginator->sort('id_proyecto',['label' => 'ID Proyecto']) ?>
                    </th>
                    <th scope="col">
                        <?= $this->Paginator->sort('Proyectos.nombre_app', ['label' => 'Aplicación']) ?>
                    </th>
                    <th scope="col">
                        <?= $this->Paginator->sort('fecha_ini', ['label' => 'Fecha inicio']) ?>
                    </th>
                    <th scope="col">
                        <?= $this->Paginator->sort('fecha_fin', ['label' => 'Fecha fin']) ?>
                    </th>
                    <th scope="col" class="actions">
                        <?= __('Acciones') ?>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($plazos as $plazo): ?>
                    <tr>
                        <td><?= $this->Number->format($plazo->id) ?></td>
                        <td><?= $this->Number->format($plazo->id_proyecto) ?></td>
                        <td><?= h($plazo->proyecto->nombre_app) ?></td>
                        <td>
                            <?php 
                                if($plazo->fecha_ini != null){
                                    echo $plazo->fecha_ini->i18nFormat('dd-MM-yyyy'); 
                                }else{echo 'No editado';} 
                            ?>
                        </td>
                        <td><?= h($plazo->fecha_fin) ?></td>
                        <td class="actions">
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Html->link(__('Ver'), ['action' => 'ver', $plazo->id]) ?>
                            </button>
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Html->link(__('Actualizar'), ['action' => 'editar', $plazo->id]) ?>
                            </button>
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $plazo->id], ['confirm' => __('Está seguro de eliminar el plazo con identificador # {0}?', $plazo->id)]) ?>
                            </button>
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Html->link(__('Comparación'), ['action' => 'compararInformes', $plazo->id]) ?>
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
       <!--         <div class="paginator">
                    <ul class="pagination">
                        <?= $this->Paginator->first('<< ' . __('first')) ?>
                        <?= $this->Paginator->prev('< ' . __('previous')) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('next') . ' >') ?>
                        <?= $this->Paginator->last(__('last') . ' >>') ?>
                    </ul>
                    <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
                </div>    -->       
    </div>
</div>
