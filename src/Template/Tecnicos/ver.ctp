<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tecnico $tecnico
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar'), ['action' => 'editar', $tecnico->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $tecnico->id], ['confirm' => __('Está seguro de eliminar el técnico con identificador # {0}?', $tecnico->id)]) ?> </li>
        <li><?= $this->Html->link(__('Ver todos'), ['action' => 'listar']) ?> </li>
        <li><?= $this->Html->link(__('Crear'), ['action' => 'crear']) ?> </li>
    </ul>
</nav>
<div class="tecnicos view large-9 medium-8 columns content">
    <h3><?= h($tecnico->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tecnico->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Grupo de trabajo') ?></th>
            <td><?= $this->Number->format($tecnico->id_grupo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($tecnico->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellidos') ?></th>
            <td><?= h($tecnico->apellidos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($tecnico->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dirección') ?></th>
            <td><?= h($tecnico->direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Correo electrónico') ?></th>
            <td><?= h($tecnico->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha creación') ?></th>
            <td><?= h($tecnico->fecha_add) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha modificado') ?></th>
            <td><?= h($tecnico->fecha_mod) ?></td>
        </tr>
    </table>
</div>
