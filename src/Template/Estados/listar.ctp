<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estado[]|\Cake\Collection\CollectionInterface $estados
 */
?>
<!--
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Crear nuevo'), ['action' => 'crear']) ?></li>
    </ul>
</nav> -->
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
                    <th scope="col"><?= $this->Paginator->sort('valor' , ['label' => 'Valor']) ?></th>
                    <th scope="col" class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estados as $estado): ?>
                    <tr>
                        <td><?= $this->Number->format($estado->id) ?></td>
                        <td><?= h($estado->valor) ?></td>
                        <td class="actions">
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Html->link(__('Ver'), ['action' => 'ver', $estado->id]) ?>
                            </button>
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Html->link(__('Editar'), ['action' => 'editar', $estado->id]) ?>
                            </button>
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $estado->id], ['confirm' => __('Está seguro de eliminar el estado con identificador # {0}?', $fase->id)]) ?>
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
