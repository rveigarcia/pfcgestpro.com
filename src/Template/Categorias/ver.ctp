<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categoria $categoria
 */
?>
<nav>
    <button class="btn btn-primary"><?= $this->Html->link('Editar', ['action' => 'editar', $categoria->id]) ?></button>
    <button class="btn btn-primary"><?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $categoria->id], ['confirm' => __('Está seguro de eliminar la categoria con identificador # {0}?', $categoria->id)]) ?></button>
    <button class="btn btn-primary"><?= $this->Html->link(__('Todos'), ['action' => 'listar']) ?> </button>
    <button class="btn btn-primary"><?= $this->Html->link(__('Crear'), ['action' => 'crear']) ?></button>
</nav>  
<div>
    <h4>Datos registrados</h4>
    <table id="user" class="table table-bordered table-striped" style="clear: both">
        <tbody> 
            <tr>
                <th width="35%" scope="row"><?= __('Id') ?></th>
                <td width="65%"><?= $this->Number->format($categoria->id) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Tipo') ?></th>
                <td width="65%"><?= h($categoria->tipo) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Fecha Add') ?></th>
                <td width="65%"><?= h($categoria->fecha_add) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Fecha Mod') ?></th>
                <td width="65%"><?= h($categoria->fecha_mod) ?></td>
            </tr>
        </tbody>    
    </table>
</div>