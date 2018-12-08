<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estado $estado
 */
?>
<nav>
    <button class="btn btn-primary"><?= $this->Html->link('Editar', ['action' => 'editar', $estado->id]) ?></button>
    <button class="btn btn-primary"><?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $estado->id], ['confirm' => __('Está seguro de eliminar el estado con identificador # {0}?', $estado->id)]) ?></button>
    <button class="btn btn-primary"><?= $this->Html->link(__('Todos'), ['action' => 'listar']) ?> </button>
    <button class="btn btn-primary"><?= $this->Html->link(__('Crear'), ['action' => 'crear']) ?></button>
</nav>  
<div>
    <h4>Datos registrados</h4>
    <table id="user" class="table table-bordered table-striped" style="clear: both">
        <tbody>
            <tr>
                <th width="35%" scope="row"><?= __('ID') ?></th>
                <td width="65%"><?= $this->Number->format($estado->id) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Valor') ?></th>
                <td width="65%"><?= h($estado->valor) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Fecha creación') ?></th>
                <td width="65%"><?= h($estado->fecha_add) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Fecha modificado') ?></th>
                <td width="65%"><?= h($estado->fecha_mod) ?></td>
            </tr>
        </tbody>
    </table>
</div>
