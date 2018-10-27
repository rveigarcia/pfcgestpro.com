<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Grupo[]|\Cake\Collection\CollectionInterface $grupos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Crear Grupo de trabajo'), ['action' => 'crear']) ?></li>
    </ul>
</nav>
<div class="grupos index large-9 medium-8 columns content">
    <h3><?= __('Grupos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id', ['label' => 'ID']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_jefe',['label' => 'ID Jefe de grupo']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('alias', ['label' => 'Nombre grupo']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('seccion', ['label' => 'Sección']) ?></th>
    <!--            <th scope="col"><?= $this->Paginator->sort('fecha_add') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_mod') ?></th>  -->
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($grupos as $grupo): ?>
            <tr>
                <td><?= $this->Number->format($grupo->id) ?></td>
                <td><?= $this->Number->format($grupo->id_jefe) ?></td>
                <td><?= h($grupo->alias) ?></td>
                <td><?= h($grupo->seccion) ?></td>
    <!--            <td><?= h($grupo->fecha_add) ?></td>
                <td><?= h($grupo->fecha_mod) ?></td>  -->
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'ver', $grupo->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'editar', $grupo->id]) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $grupo->id], ['confirm' => __('Está seguro de eliminar el grupo de trabajo con identificador # {0}?', $grupo->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
