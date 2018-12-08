<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proyecto $proyecto
 */
?>
<!--
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar'), ['action' => 'editar', $proyecto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $proyecto->id], ['confirm' => __('Está seguro de eliminar el proyecto con identificador # {0}?', $proyecto->id)]) ?> </li>
        <li><?= $this->Html->link(__('Ver todos'), ['action' => 'listar']) ?> </li>
        <li><?= $this->Html->link(__('Crear nuevo'), ['action' => 'crear']) ?> </li>
    </ul>
</nav>   -->
<nav>
    <button class="btn btn-primary"><?= $this->Html->link('Editar', ['action' => 'editar', $proyecto->id]) ?></button>
    <button class="btn btn-primary"><?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $proyecto->id], ['confirm' => __('Está seguro de eliminar el proyecto con identificador # {0}?', $proyecto->id)]) ?></button>
    <button class="btn btn-primary"><?= $this->Html->link(__('Todos'), ['action' => 'listar']) ?> </button>
    <button class="btn btn-primary"><?= $this->Html->link(__('Crear'), ['action' => 'crear']) ?></button>
</nav>  
<div>
    <h4>Datos registrados</h4>
    <table id="user" class="table table-bordered table-striped" style="clear: both">
        <tbody> 
            <tr>         
                <th width="35%" scope="row"><?= __('ID') ?></th>
                <td width="65%"><?= $this->Number->format($proyecto->id) ?></td>
            <tr>
                <th scope="row"><?= __('ID Grupo') ?></th>
                <td width="65%"><?= $this->Number->format($proyecto->id_grupo) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('ID Estado') ?></th>
                <td width="65%"><?= $this->Number->format($proyecto->id_estado) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Id Cliente') ?></th>
                <td width="65%"><?= $this->Number->format($proyecto->id_cliente) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Nombre Aplicación') ?></th>
                <td width="65%"><?= h($proyecto->nombre_app) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Descripción') ?></th>
                <td width="65%"><?= h($proyecto->descripcion) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Creado') ?></th>
                <td width="65%"><?= h($proyecto->fecha_add) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Modificado') ?></th>
                <td width="65%"><?= h($proyecto->fecha_mod) ?></td>
            </tr>                                                   
        </tbody>
    </table>                                
</div>

