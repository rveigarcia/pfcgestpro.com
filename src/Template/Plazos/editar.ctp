<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Plazo $plazo
 */
?>
<div class="content-box-large">
    <p>
        <button class="btn btn-primary">
            <?= $this->Html->link(__('Ver'), ['action' => 'ver', $plazo->id]) ?>
        </button>
        <button class="btn btn-primary"><?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $plazo->id], ['confirm' => __('Está seguro de eliminar el plazo con identificador # {0}?', $plazo->id)]) ?></button>
        <button class="btn btn-primary"><?= $this->Html->link(__('Todos'), ['action' => 'listar']) ?> </button>
        <button class="btn btn-primary"><?= $this->Html->link(__('Crear'), ['action' => 'crear']) ?></button>
    </p>  
    <div class="panel-heading">
        <div class="panel-title">Nuevo Plazo</div>
        <div class="panel-body">
            <fieldset>
                <div class="form-group">
                    <?php 
                        echo $this->Form->create($Plazo);
                        echo $this->Form->create($proyecto); 
                        echo '<div class="form-group col-md-10">';
                        echo $this->Form->control('id_proyecto', ['type' => 'select','label' => 'Grupo', 'options' => $data, 'class' => 'form-control']);
                        echo '</div>';
                        echo '<div class="form-group col-md-10">'; 
                        echo $this->Form->submit('Enviar',['class' => 'btn btn-primary form-group']);
                        echo '</div>'; 
                        echo $this->Form->end();  
                    ?>
                </div>    
            </fieldset>
        </div>
    </div>
</div>