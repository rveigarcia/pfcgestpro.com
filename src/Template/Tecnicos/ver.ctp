<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tecnico $tecnico
 */
?>
<!--
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar'), ['action' => 'editar', $tecnico->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $tecnico->id], ['confirm' => __('Está seguro de eliminar el técnico con identificador # {0}?', $tecnico->id)]) ?> </li>
        <li><?= $this->Html->link(__('Ver todos'), ['action' => 'listar']) ?> </li>
        <li><?= $this->Html->link(__('Crear'), ['action' => 'crear']) ?> </li>
    </ul>
</nav>  -->
<nav>
    <button class="btn btn-primary"><?= $this->Html->link('Editar', ['class' => 'enlacesVer','action' => 'editar', $tecnico->id]) ?></button>
    <button class="btn btn-primary"><?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $tecnico->id], ['confirm' => __('Está seguro de eliminar el proyecto con identificador # {0}?', $tecnico->id)]) ?></button>
    <button class="btn btn-primary"><?= $this->Html->link(__('Todos'), ['class' => 'text-white','action' => 'listar']) ?> </button>
    <button class="btn btn-primary"><?= $this->Html->link(__('Crear'), ['action' => 'crear']) ?></button>
</nav> 

<div>
    <h4>Datos registrados</h4>
    <table id="user" class="table table-bordered table-striped" style="clear: both">
        <tbody> 
            <tr>  
                <th width="35%" scope="row"><?= __('Id') ?></th>
                <td width="65%"><?= $this->Number->format($tecnico->id) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Id Grupo de trabajo') ?></th>
                <td width="65%"><?= $this->Number->format($tecnico->id_grupo) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Nombre') ?></th>
                <td width="65%"><?= h($tecnico->nombre) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Apellidos') ?></th>
                <td width="65%"><?= h($tecnico->apellidos) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Tipo') ?></th>
                <td width="65%"><?= h($tecnico->tipo) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Dirección') ?></th>
                <td width="65%"><?= h($tecnico->direccion) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Correo electrónico') ?></th>
                <td width="65%"><?= h($tecnico->email) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Fecha creación') ?></th>
                <td width="65%"><?= h($tecnico->fecha_add) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Fecha modificado') ?></th>
                <td width="65%"><?= h($tecnico->fecha_mod) ?></td>
            </tr>
        </tbody>    
    </table>
</div>
