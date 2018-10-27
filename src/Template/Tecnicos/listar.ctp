<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tecnico[]|\Cake\Collection\CollectionInterface $tecnicos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Crear Técnico'), ['action' => 'crear']) ?></li>
    </ul>
</nav>
<div class="tecnicos index large-9 medium-8 columns content">
    <h3><?= __('Tecnicos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id', ['label' => 'ID']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_grupo', ['label' => 'ID grupo de trabajo']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre', ['label' => 'Nombre']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('apelldos', ['label' => 'Apellidos']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo', ['label' => 'Tipo']) ?></th>
    <!--             <th scope="col"><?= $this->Paginator->sort('direccion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_add') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_mod') ?></th>     -->
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tecnicos as $tecnico): ?>
            <tr>
                <td><?= $this->Number->format($tecnico->id) ?></td>
                <td><?= $this->Number->format($tecnico->id_grupo) ?></td>
                <td><?= h($tecnico->nombre) ?></td>
                <td><?= h($tecnico->apellidos) ?></td>
                <td><?= h($tecnico->tipo) ?></td>
    <!--             <td><?= h($tecnico->direccion) ?></td>
                <td><?= h($tecnico->email) ?></td>
                <td><?= h($tecnico->fecha_add) ?></td>
                <td><?= h($tecnico->fecha_mod) ?></td>     -->
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'ver', $tecnico->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'editar', $tecnico->id]) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $tecnico->id], ['confirm' => __('Está seguro de eliminar el técnico con identificadore # {0}?', $tecnico->id)]) ?>
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
