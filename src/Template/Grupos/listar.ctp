<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Grupo[]|\Cake\Collection\CollectionInterface $grupos
 */
?>
<!--
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Crear nuevo'), ['action' => 'crear']) ?></li>
    </ul>
</nav>     -->
<div class="container-fluid">
    <div class="panel-heading">
        <div class="panel-title">Grupos de trabajo registrados</div>
        <button class="btn btn-primary"><?= $this->Html->link(__('Crear'), ['action' => 'crear']) ?> </button>
    </div>
    <div class="panel-body table-responsive">
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id', ['label' => 'ID']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('id_jefe',['label' => 'ID Jefe de grupo']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('jefe.nombre','Jefes') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('alias', ['label' => 'Nombre grupo']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('seccion', ['label' => 'Sección']) ?></th>
                    <th scope="col" class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($grupos as $grupo): ?>
                    <tr>
                        <td><?= $this->Number->format($grupo->id) ?></td>
                        <td><?= $this->Number->format($grupo->id_jefe) ?></td>
                        <td><?= h($grupo->jefe->nombre . ' ' . $grupo->jefe->apellidos) ?></td>
                        <td><?= h($grupo->alias) ?></td>
                        <td><?= h($grupo->seccion) ?></td>
                        <td class="actions">
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Html->link(__('Ver'), ['action' => 'ver', $grupo->id]) ?>
                            </button>
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Html->link(__('Editar'), ['action' => 'editar', $grupo->id]) ?>
                            </button>
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $grupo->id], ['confirm' => __('Está seguro de eliminar el proyecto con identificador # {0}?', $grupo->id)]) ?>
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
                </div>   -->      
    </div>
</div>
