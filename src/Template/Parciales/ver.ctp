ver<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parciale $parciale
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar'), ['action' => 'editar', $parciale->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $parciale->id], ['confirm' => __('Está seguro de eliminar el grupo de trabajo con identificado # {0}?', $parciale->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar todos'), ['action' => 'listar']) ?> </li>
        <li><?= $this->Html->link(__('Crear nuevo'), ['action' => 'crear']) ?> </li>
    </ul>
</nav>
<div class="parciales view large-9 medium-8 columns content">
    <h3>Datos Parcial</h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($parciale->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Plazo') ?></th>
            <td><?= $this->Number->format($parciale->id_plazo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Fase') ?></th>
            <td><?= $this->Number->format($parciale->id_fase) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Concepto') ?></th>
            <td><?= h($parciale->concepto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcioón') ?></th>
            <td><?= h($parciale->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Inicio Teórica') ?></th>
            <td><?= h($parciale->fecha_ini_teorica) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Fin Teórica') ?></th>
            <td><?= h($parciale->fecha_fin_teorica) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Inicio Tarea') ?></th>
            <td><?= h($parciale->fecha_ini_tarea) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Fin Tarea') ?></th>
            <td><?= h($parciale->fecha_fin_tarea) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Creación') ?></th>
            <td><?= h($parciale->fecha_add) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Modificado') ?></th>
            <td><?= h($parciale->fecha_mod) ?></td>
        </tr>
    </table>
</div>
