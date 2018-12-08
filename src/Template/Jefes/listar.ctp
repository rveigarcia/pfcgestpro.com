<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jefe[]|\Cake\Collection\CollectionInterface $jefes
 */
?>
<!--
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Crear Jefe de grupo'), ['action' => 'crear']) ?></li>
    </ul>
</nav>  -->
<div class="container-fluid">
    <div class="panel-heading">
        <div class="panel-title">Jefes de grupo registrados</div>
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
                        <?= $this->Paginator->sort('nombre', ['label' => 'Nombre']) ?>
                    </th>
                    <th scope="col">
                        <?= $this->Paginator->sort('apellidos', ['label' => 'Apellidos']) ?>
                    </th>
                    <th scope="col">
                        <?= $this->Paginator->sort('direccion') ?>
                    </th>
                    <th scope="col">
                        <?= $this->Paginator->sort('email') ?>
                    </th>
                    <th scope="col" class="actions">
                        <?= __('Acciones') ?>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jefes as $jefe): ?>
                    <tr>
                        <td><?= $this->Number->format($jefe->id) ?></td>
                        <td><?= h($jefe->nombre) ?></td>
                        <td><?= h($jefe->apellidos) ?></td>
                        <td><?= h($jefe->direccion) ?></td>
                        <td><?= h($jefe->email) ?></td>    
                        <td class="actions">
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Html->link(__('Ver'), ['action' => 'ver', $jefe->id]) ?>
                            </button>
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Html->link(__('Editar'), ['action' => 'editar', $jefe->id]) ?>
                            </button>
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $jefe->id], ['confirm' => __('Está seguro de eliminar el proyecto con identificador # {0}?', $jefe->id)]) ?>
                            </button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
      <!--          <div class="paginator">
                    <ul class="pagination">
                        <?= $this->Paginator->first('<< ' . __('first')) ?>
                        <?= $this->Paginator->prev('< ' . __('previous')) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('next') . ' >') ?>
                        <?= $this->Paginator->last(__('last') . ' >>') ?>
                    </ul>
                    <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
                </div>  -->
    </div>          
</div>
