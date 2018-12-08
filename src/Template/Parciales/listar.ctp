<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parciale[]|\Cake\Collection\CollectionInterface $parciales
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Crear Nuevo'), ['action' => 'crear']) ?></li>
    </ul>
</nav>
<div class="parciales index large-9 medium-8 columns content">
    <h3><?= __('Parciales') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_plazo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_fase') ?></th>
                <th scope="col"><?= $this->Paginator->sort('concepto') ?></th>
    <!--            <th scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_ini_teorica') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_fin_teorica') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_ini_tarea') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_fin_tarea') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_add') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_mod') ?></th>   -->
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($parciales as $parciale): ?>
            <tr>
                <td><?= $this->Number->format($parciale->id) ?></td>
                <td><?= $this->Number->format($parciale->id_plazo) ?></td>
                <td><?= $this->Number->format($parciale->id_fase) ?></td>
                <td><?= h($parciale->concepto) ?></td>
    <!--            <td><?= h($parciale->descripcion) ?></td>
                <td><?= h($parciale->fecha_ini_teorica) ?></td>
                <td><?= h($parciale->fecha_fin_teorica) ?></td>
                <td><?= h($parciale->fecha_ini_tarea) ?></td>
                <td><?= h($parciale->fecha_fin_tarea) ?></td>
                <td><?= h($parciale->fecha_add) ?></td>
                <td><?= h($parciale->fecha_mod) ?></td>    -->
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'ver', $parciale->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'editar', $parciale->id]) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $parciale->id], ['confirm' => __('Está seguro de eliminar el grupo de trabajo con identificador # {0}?', $parciale->id)]) ?>
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
