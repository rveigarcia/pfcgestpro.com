<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Informe[]|\Cake\Collection\CollectionInterface $informes
 */
?>
<div class="container-fluid">
    <div class="panel-heading">
        <div class="panel-title">Informes registrados</div>
        <button class="btn btn-primary"><?= $this->Html->link(__('Crear'), ['action' => 'crear']) ?> </button>
    </div>
    <div class="panel-body table-responsive">
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id', ['label' => 'ID']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('id_proyecto', ['label' => 'ID proyecto']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Proyectos.nombre_app', ['label' => 'Proyecto']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('estudio', ['label' => 'Tipo']) ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($informes as $informe): ?>
                    <tr>
                        <td><?= $this->Number->format($informe->id) ?></td>
                        <td><?= $this->Number->format($informe->id_proyecto) ?></td>
                        <td><?= h($informe->proyecto->nombre_app) ?></td>
                        <td>
                            <?php 
                                if($informe->estudio == 1){
                                    echo  h('estudio');
                                }else{
                                    echo h('desarrollo');
                                }
                            ?></td>
                        <td class="actions">
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Html->link(__('Ver'), ['action' => 'ver', $informe->id]) ?>
                            </button>
                <!--            <button class="btn btn-primary btn-xs">
                                <?= $this->Html->link(__('Editar'), ['action' => 'editar', $informe->id]) ?>
                            </button>   -->
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $informe->id], ['confirm' => __('Está seguro de eliminar el informe con identificador # {0}?', $informe->id)]) ?>
                            </button>
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Html->link(__('Nuevo Contenido'), ['controller' => 'contenidos','action' => 'crear', $informe->proyecto->id_grupo]) ?>
                            </button>   
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
<!--                <div class="paginator">
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
