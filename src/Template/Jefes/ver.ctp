<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jefe $jefe
 */
?>
<nav>
    <button class="btn btn-primary"><?= $this->Html->link('Editar', ['class' => 'enlacesVer','action' => 'editar', $jefe->id]) ?></button>
    <button class="btn btn-primary"><?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $jefe->id], ['confirm' => __('Está seguro de eliminar el proyecto con identificador # {0}?', $jefe->id)]) ?></button>
    <button class="btn btn-primary"><?= $this->Html->link(__('Todos'), ['class' => 'text-white','action' => 'listar']) ?> </button>
    <button class="btn btn-primary"><?= $this->Html->link(__('Crear'), ['action' => 'crear']) ?></button>
</nav> 
<!-- <div class="jefes view large-9 medium-8 columns content">   -->
<div>
    <h4>Datos registrados</h4>
    <table id="user" class="table table-bordered table-striped" style="clear: both">
        <tbody>
            <tr>
                <th width="35%" scope="row"><?= __('Id') ?></th>
                <td width="65%"><?= $this->Number->format($jefe->id) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Nombre') ?></th>
                <td width="65%"><?= h($jefe->nombre) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Apellidos') ?></th>
                <td width="65%"><?= h($jefe->apellidos) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Dirección') ?></th>
                <td width="65%"><?= h($jefe->direccion) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Correo electrónico') ?></th>
                <td width="65%"><?= h($jefe->email) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Fecha creación') ?></th>
                <td width="65%"><?= h($jefe->fecha_add) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Fecha modificado') ?></th>
                <td width="65%"><?= h($jefe->fecha_mod) ?></td>
            </tr>
        </tbody>    
    </table>
</div>
