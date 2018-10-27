<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Grupo $grupo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Accciones') ?></li>
        <li><?= $this->Html->link(__('Editar'), ['action' => 'editar', $grupo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $grupo->id], ['confirm' => __('Está seguro de eliminar el grupo de trabajo con identificador # {0}?', $grupo->id)]) ?> </li>
        <li><?= $this->Html->link(__('Ver todos'), ['action' => 'listar']) ?> </li>
        <li><?= $this->Html->link(__('Crear nuevo'), ['action' => 'crear']) ?> </li>
    </ul>
</nav>
<div class="grupos view large-9 medium-8 columns content">
    <h3><?= h($grupo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($grupo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Jefe') ?></th>
            <td><?= $this->Number->format($grupo->id_jefe) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alias') ?></th>
            <td><?= h($grupo->alias) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sección') ?></th>
            <td><?= h($grupo->seccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha creación') ?></th>
            <td><?= h($grupo->fecha_add) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha modificado') ?></th>
            <td><?= h($grupo->fecha_mod) ?></td>
        </tr>
    </table>
</div>
