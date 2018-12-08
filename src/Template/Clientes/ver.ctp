<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<nav>
    <button class="btn btn-primary"><?= $this->Html->link('Editar', ['class' => 'enlacesVer','action' => 'editar', $cliente->id]) ?></button>
    <button class="btn btn-primary"><?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $cliente->id], ['confirm' => __('Está seguro de eliminar el cliente con identificador # {0}?', $cliente->id)]) ?></button>
    <button class="btn btn-primary"><?= $this->Html->link(__('Todos'), ['class' => 'text-white','action' => 'listar']) ?> </button>
    <button class="btn btn-primary"><?= $this->Html->link(__('Crear'), ['action' => 'crear']) ?></button>
</nav>  
<div>
    <h4>Datos registrados</h4>
    <table id="user" class="table table-bordered table-striped" style="clear: both">
        <tbody> 
            <tr>
                <th width="35%" scope="row"><?= __('ID') ?></th>
                <td width="65%"><?= $this->Number->format($cliente->id) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Nombre') ?></th>
                <td width="65%"><?= h($cliente->nombre) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Apellidos') ?></th>
                <td width="65%"><?= h($cliente->apellidos) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Direccion') ?></th>
                <td width="65%"><?= h($cliente->direccion) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Email') ?></th>
                <td width="65%"><?= h($cliente->email) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Fecha Add') ?></th>
                <td width="65%"><?= h($cliente->fecha_add) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Fecha Mod') ?></th>
                <td width="65%"><?= h($cliente->fecha_mod) ?></td>
            </tr>
        </tbody>
    </table>
</div>