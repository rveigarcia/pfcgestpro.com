<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Grupo $grupo
 */
?>
<div class="content-box-large">
    <p>
        <button class="btn btn-primary">
            <?= $this->Html->link(__('Ver'), ['action' => 'ver', $grupo->id]) ?>
        </button>
        <button class="btn btn-primary"><?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $grupo->id], ['confirm' => __('Está seguro de eliminar el proyecto con identificador # {0}?', $grupo->id)]) ?></button>
        <button class="btn btn-primary"><?= $this->Html->link(__('Todos'), ['class' => 'text-white','action' => 'listar']) ?> </button>
        <button class="btn btn-primary"><?= $this->Html->link(__('Crear'), ['action' => 'crear']) ?></button>
    </p>  
    <div class="panel-heading">
        <div class="panel-title">Nuevo Proyecto</div>
        <div class="panel-body">
            <fieldset>
                <div class="form-group">
                    <?php 
                        echo $this->Form->create($grupo);
                        echo '<div class="form-group col-md-10">';
                        echo $this->Form->control('id_jefe', ['type' => 'select','label' => 'Jefe de Grupo', 'options' => $data, 'class' => 'form-control']);
                        echo '</div>';
                        echo '<div class="form-group col-md-10">';
                        echo $this->Form->control('alias', ['type' => 'text', 'label' => 'Nombre grupo', 'class' => 'form-control']);
                        echo '</div>';
                        // Crear entidad sección y manejar la sección con un select 
                        echo '<div class="form-group col-md-10">';
                        echo $this->Form->control('seccion', ['type' => 'text', 'label' => 'Sección', 'class' => 'form-control']);
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