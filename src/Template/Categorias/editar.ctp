<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categoria $categoria
 */
?>
<div class="content-box-large">
    <p>
        <button class="btn btn-primary">
            <?= $this->Html->link(__('Ver'), ['action' => 'ver', $categoria->id]) ?>
        </button>
        <button class="btn btn-primary"><?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $categoria->id], ['confirm' => __('Está seguro de eliminar la Categoria con identificador # {0}?', $categoria->id)]) ?></button>
        <button class="btn btn-primary"><?= $this->Html->link(__('Todos'), ['action' => 'listar']) ?> </button>
        <button class="btn btn-primary"><?= $this->Html->link(__('Crear'), ['action' => 'crear']) ?></button>
    </p>  
    <div class="panel-heading">
        <div class="panel-title">Nueva Categoría</div>
        <div class="panel-body">
            <fieldset>
                <div class="form-group">
                    <?php 
                        echo $this->Form->create($categoria);
                        echo '<div class="form-group col-md-10">';
                        echo $this->Form->control('tipo', ['type' => 'text', 'label' => 'Tipo', 'class' => 'form-control']);
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