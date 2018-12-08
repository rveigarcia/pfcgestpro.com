<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fase $fase
 */
?>
<nav>
    <button class="btn btn-primary"><?= $this->Html->link('Editar', ['action' => 'editar', $fase->id]) ?></button>
    <button class="btn btn-primary"><?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $fase->id], ['confirm' => __('Está seguro de eliminar la fase con identificador # {0}?', $fase->id)]) ?></button>
    <button class="btn btn-primary"><?= $this->Html->link(__('Todos'), ['action' => 'listar']) ?> </button>
    <button class="btn btn-primary"><?= $this->Html->link(__('Crear'), ['action' => 'crear']) ?></button>
</nav>  
<div>
    <h4>Datos registrados</h4>
    <table id="user" class="table table-bordered table-striped" style="clear: both">
        <tbody> 
            <tr>
                <th width="35%" scope="row"><?= __('ID') ?></th>
                <td width="65%"><?= $this->Number->format($fase->id) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Concepto') ?></th>
                <td width="65%"><?= h($fase->concepto) ?></td>
            </tr>
        </tbody>
    </table>
</div>
