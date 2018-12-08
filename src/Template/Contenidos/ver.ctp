<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contenido $contenido
 */
?>
<nav>
    <button class="btn btn-primary"><?= $this->Html->link('Editar', ['action' => 'editar', $contenido->id]) ?></button>
    <button class="btn btn-primary"><?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $contenido->id], ['confirm' => __('Está seguro de eliminar el contenido con identificador # {0}?', $contenido->id)]) ?></button>
    <button class="btn btn-primary"><?= $this->Html->link(__('Todos'), ['action' => 'listar']) ?> </button>
    <button class="btn btn-primary"><?= $this->Html->link(__('Crear'), ['action' => 'seleccionarinformeparacrear']) ?></button>
</nav>  
<div>
    <h4>Datos registrados</h4>
    <table id="user" class="table table-bordered table-striped" style="clear: both">
        <tbody> 
            <tr>
                <th width="35%" scope="row"><?= __('ID') ?></th>
                <td width="65%"><?= $this->Number->format($contenido->id) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('ID Técnico') ?></th>
                <td width="65%"><?= $this->Number->format($contenido->id_tecnico) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('ID Informe') ?></th>
                <td width="65%"><?= $this->Number->format($contenido->id_informe) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('ID Fase') ?></th>
                <td width="65%"><?= $this->Number->format($contenido->id_fase) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Concepto') ?></th>
                <td width="65%"><?= h($contenido->concepto) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Descripción') ?></th>
                <td width="65%"><?= h($contenido->descripcion) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Fecha inicio') ?></th>
                <td width="65%"><?= h($contenido->fecha_ini) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Fecha fin') ?></th>
                <td width="65%"><?= h($contenido->fecha_fin) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Fecha creación') ?></th>
                <td width="65%"><?= h($contenido->fecha_add) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Fecha modificado') ?></th>
                <td width="65%"><?= h($contenido->fecha_mod) ?></td>
            </tr>
        </tbody>
    </table>
</div>
