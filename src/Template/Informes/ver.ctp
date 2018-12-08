<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Informe $informe
 */
?>
<!--
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar'), ['action' => 'editar', $informe->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $informe->id], ['confirm' => __('Está seguro de eliminar el informe con identificador # {0}?', $informe->id)]) ?> </li>
        <li><?= $this->Html->link(__('Ver todos'), ['action' => 'listar']) ?> </li>
        <li><?= $this->Html->link(__('Crear nuevo'), ['action' => 'crear']) ?> </li>
    </ul>      
</nav>    --> 
<nav>
    <button class="btn btn-primary"><?= $this->Html->link('Editar', ['action' => 'editar', $informe->id]) ?></button>
    <button class="btn btn-primary"><?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $informe->id], ['confirm' => __('Está seguro de eliminar el informe con identificador # {0}?', $informe->id)]) ?></button>
    <button class="btn btn-primary"><?= $this->Html->link(__('Todos'), ['action' => 'listar']) ?> </button>
    <button class="btn btn-primary"><?= $this->Html->link(__('Crear'), ['action' => 'crear']) ?></button>
</nav>  
<div>
    <h4>Datos registrados</h4>
    <table id="user" class="table table-bordered table-striped" style="clear: both">
        <tbody>
        <tr>
            <th width="35%" scope="row"><?= __('ID') ?></th>
            <td width="65%"><?= $this->Number->format($informe->id) ?></td>
        </tr>
        <tr>
            <th width="35%" scope="row"><?= __('ID Proyecto') ?></th>
            <td width="65%"><?= $this->Number->format($informe->id_proyecto) ?></td>
        </tr>
        <tr>
            <th width="35%" scope="row"><?= __('Tipo') ?></th>
            <td width="65%"><?php if($informe->estudio == '0'){
                          echo  h('estudio');
                    }else{
                       echo h('desarrollo');
                    }?></td>
        </tr>
        <tr>
            <th width="35%" scope="row"><?= __('Fecha creación') ?></th>
            <td width="65%"><?= h($informe->fecha_add) ?></td>
        </tr>
        <tr>
            <th width="35%" scope="row"><?= __('Fecha modificado') ?></th>
            <td width="65%"><?= h($informe->fecha_mod) ?></td>
        </tr>
    </table>
</div>
