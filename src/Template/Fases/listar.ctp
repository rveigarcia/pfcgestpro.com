<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fase[]|\Cake\Collection\CollectionInterface $fases
 */
?>
<div class="container-fluid">
    <div class="panel-heading">
        <div class="panel-title">Estados registrados</div>
        <button class="btn btn-primary"><?= $this->Html->link(__('Crear'), ['action' => 'crear']) ?> </button>
    </div>
    <div class="panel-body table-responsive">
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id', ['label' => 'ID']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('concepto', ['label' => 'Concepto']) ?></th>
                    <th scope="col" class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fases as $fase): ?>
                    <tr>
                        <td><?= $this->Number->format($fase->id) ?></td>
                        <td><?= h($fase->concepto) ?></td>
                        <td class="actions">
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Html->link(__('Ver'), ['action' => 'ver', $fase->id]) ?>
                            </button>
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Html->link(__('Editar'), ['action' => 'editar', $fase->id]) ?>
                            </button>
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $fase->id], ['confirm' => __('Está seguro de eliminar la fase con identificador # {0}?', $fase->id)]) ?>
                            </button>
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Html->link(__('Crear'), ['action' => 'crear']) ?>
                            </button>    
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
