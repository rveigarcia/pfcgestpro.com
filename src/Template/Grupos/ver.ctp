<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Grupo $grupo
 */
?>

<nav>
    <button class="btn btn-primary"><?= $this->Html->link('Editar', ['class' => 'enlacesVer','action' => 'editar', $grupo->id]) ?></button>
    <button class="btn btn-primary"><?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $grupo->id], ['confirm' => __('Está seguro de eliminar el grupo de trabajo con identificador # {0}?', $grupo->id)]) ?></button>
    <button class="btn btn-primary"><?= $this->Html->link(__('Todos'), ['class' => 'text-white','action' => 'listar']) ?> </button>
    <button class="btn btn-primary"><?= $this->Html->link(__('Crear'), ['action' => 'crear']) ?></button>
</nav> 
<!-- <div class="grupos view large-9 medium-8 columns content"> -->
<div>
     <h4>Datos registrados</h4>
        <table id="user" class="table table-bordered table-striped" style="clear: both">
            <tbody>     
                <tr>
                    <th width="35%" scope="row"><?= __('ID') ?></th>
                    <td width="65%"><?= $this->Number->format($grupo->id) ?></td>
                </tr>
                <tr>
                    <th width="35%" scope="row"><?= __('Id Jefe') ?></th>
                    <td width="65%"><?= $this->Number->format($grupo->id_jefe) ?></td>
                </tr>
                <tr>
                    <th width="35%" scope="row"><?= __('Alias') ?></th>
                    <td width="65%"><?= h($grupo->alias) ?></td>
                </tr>
                <tr>
                    <th width="35%" scope="row"><?= __('Sección') ?></th>
                    <td width="65%"><?= h($grupo->seccion) ?></td>
                </tr>
                <tr>
                    <th width="35%" scope="row"><?= __('Fecha creación') ?></th>
                    <td width="65%"><?= h($grupo->fecha_add) ?></td>
                </tr>
                <tr>
                    <th width="35%" scope="row"><?= __('Fecha modificado') ?></th>
                    <td width="65%"><?= h($grupo->fecha_mod) ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
