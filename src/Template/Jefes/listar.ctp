<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jefe[]|\Cake\Collection\CollectionInterface $jefes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Crear Jefe de grupo'), ['action' => 'crear']) ?></li>
    </ul>
</nav>
<div class="jefes index large-9 medium-8 columns content">
    <h3><?= __('Jefes de grupo') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id', ['label' => 'ID']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre', ['label' => 'Nombre']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellidos', ['label' => 'Apellidos']) ?></th>
        <!--         <th scope="col"><?= $this->Paginator->sort('direccion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_add') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_mod') ?></th>  -->
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jefes as $jefe): ?>
            <tr>
                <td><?= $this->Number->format($jefe->id) ?></td>
                <td><?= h($jefe->nombre) ?></td>
                <td><?= h($jefe->apellidos) ?></td>
        <!--         <td><?= h($jefe->direccion) ?></td>
                <td><?= h($jefe->email) ?></td>
                <td><?= h($jefe->fecha_add) ?></td>
                <td><?= h($jefe->fecha_mod) ?></td>   -->
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'ver', $jefe->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'editar', $jefe->id]) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $jefe->id], ['confirm' => __('Seguro que desea eliminar el Jefe de grupo con identificador # {0}?', $jefe->id)]) ?>
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
