<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contenido[]|\Cake\Collection\CollectionInterface $contenidos
 */
?>
<div class="container-fluid">
    <div class="panel-heading">
        <div class="panel-title">Contenidos registrados</div>
        <button class="btn btn-primary"><?= $this->Html->link(__('Crear'), ['action' => 'seleccionarinformeparacrear']) ?> </button>
    </div>
    <div class="panel-body table-responsive">
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id', ['label' => 'ID']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('id_tecnico', ['label' => 'ID Técnico']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Tecnicos.nombre', ['label' => 'Técnico']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Proyectos.nombre_app', ['label' => 'Proyecto']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Fases.concepto', ['label' => 'ID Fase']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('concepto', ['label' => 'Concepto']) ?></th>
                    <th scope="col" class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contenidos as $contenido): ?>
                    <tr>
                        <td><?= $this->Number->format($contenido->id) ?></td>
                        <td><?= $this->Number->format($contenido->id_tecnico) ?></td>
                        <td><?= h($contenido->tecnico->nombre . ' ' . $contenido->tecnico->apellidos ) ?></td>
                        <td><?= h($contenido->informe->proyecto->nombre_app) ?></td>
                        <td><?= h($contenido->fase->concepto) ?></td>
                        <td><?= h($contenido->concepto) ?></td>
                        <td class="actions">
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Html->link(__('Ver'), ['action' => 'ver', $contenido->id]) ?>
                            </button>
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Html->link(__('Editar'), ['action' => 'editar', $contenido->id]) ?>
                            </button>
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $contenido->id], ['confirm' => __('Está seguro de eliminar el contenido con identificador # {0}?', $contenido->id)]) ?>
                            </button> 
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
         <!--       <div class="paginator">
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
