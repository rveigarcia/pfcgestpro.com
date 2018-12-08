<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Plazo $plazo
 */
?>
<nav>
    <button class="btn btn-primary"><?= $this->Html->link('Editar', ['action' => 'editar', $plazo->id]) ?></button>
    <button class="btn btn-primary"><?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $plazo->id], ['confirm' => __('Está seguro de eliminar el plazo con identificador # {0}?', $plazo->id)]) ?></button>
    <button class="btn btn-primary"><?= $this->Html->link(__('Todos'), ['action' => 'listar']) ?> </button>
    <button class="btn btn-primary"><?= $this->Html->link(__('Crear'), ['action' => 'crear']) ?></button>
</nav>  
<div>
    <h4>Datos registrados</h4>
    <table id="user" class="table table-bordered table-striped" style="clear: both">
        <tbody>
            <tr>
                <th width="35%" scope="row"><?= __('Id') ?></th>
                <td width="65%"><?= $this->Number->format($plazo->id) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Id Proyecto') ?></th>
                <td width="65%"><?= $this->Number->format($plazo->id_proyecto) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Fecha Inicio') ?></th>
                <td width="65%"><?= h($plazo->fecha_ini->i18nFormat('dd-MM-yyyy')) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Fecha Fin') ?></th>
                <td width="65%"><?= h($plazo->fecha_fin->i18nFormat('dd-MM-yyyy')) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Fecha Creación') ?></th>
                <td width="65%"><?= h($plazo->fecha_add->i18nFormat('dd-MM-yyyy HH:mm:ss')) ?></td>
            </tr>
            <tr>
                <th width="35%" scope="row"><?= __('Fecha Modificado') ?></th>
                <td width="65%">
                    <?php 
                        if($plazo->fecha_mod != null){
                            h($plazo->fecha_mod->i18nFormat('dd-MM-yyyy HH:mm:ss')); 
                        }
                        echo 'No modificado'; 
                    ?>
                    
                </td>  
            </tr>   
        </table>
    </div>
</div>
