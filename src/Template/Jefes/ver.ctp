<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jefe $jefe
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Aciones') ?></li>
        <li><?= $this->Html->link(__('Editar'), ['action' => 'editar', $jefe->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $jefe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jefe->id)]) ?> </li>
        <li><?= $this->Html->link(__('Ver todos'), ['action' => 'listar']) ?> </li>
        <li><?= $this->Html->link(__('Crear nuevo'), ['action' => 'crear']) ?> </li>
    </ul>
</nav>
<div class="jefes view large-9 medium-8 columns content">
    <h3>Datos personales</h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($jefe->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($jefe->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellidos') ?></th>
            <td><?= h($jefe->apellidos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dirección') ?></th>
            <td><?= h($jefe->direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Correo electrónico') ?></th>
            <td><?= h($jefe->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha creación') ?></th>
            <td><?= h($jefe->fecha_add) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha modificado') ?></th>
            <td><?= h($jefe->fecha_mod) ?></td>
        </tr>
    </table>
</div>
