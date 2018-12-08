<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proyecto $proyecto
 */
?>
<!--
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'eliminar', $proyecto->id],
                ['confirm' => __('Está seguro de eliminar el proyecto con identificador # {0}?', $proyecto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Ver todos'), ['action' => 'Listar']) ?></li>
    </ul>
</nav> -->
<div class="content-box-large">
    <p>
        <button class="btn btn-primary">
            <?= $this->Html->link(__('Ver'), ['action' => 'ver', $proyecto->id]) ?>
        </button>
        <button class="btn btn-primary"><?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $proyecto->id], ['confirm' => __('Está seguro de eliminar el proyecto con identificador # {0}?', $proyecto->id)]) ?></button>
        <button class="btn btn-primary"><?= $this->Html->link(__('Todos'), ['action' => 'listar']) ?> </button>
        <button class="btn btn-primary"><?= $this->Html->link(__('Crear'), ['action' => 'crear']) ?></button>
    </p> 
    <div class="panel-heading">
        <div class="panel-title">Editar Proyecto</div>
        <div class="panel-body">
            <fieldset> 
                <div class="form-group">
                    <?php 
                        echo $this->Form->create($proyecto);     
                        echo '<div class="form-group col-md-10">';
                        echo $this->Form->control('id_grupo', ['type' => 'select','label' => 'Grupo', 'options' => $dataA, 'class' => 'form-control']);
                        echo '</div>';
                        echo '<div class="form-group col-md-10">';
                        echo $this->Form->control('id_estado', ['type' => 'select','label' => 'Estado', 'options' => $dataB, 'class' => 'form-control']);
                        echo '</div>';
                        echo '<div class="form-group col-md-10">';
                        echo $this->Form->control('id_cliente', ['type' => 'select','label' => 'Cliente', 'options' => $dataC, 'class' => 'form-control']);
                        echo '</div>';
                        echo '<div class="form-group col-md-10">';
                        echo $this->Form->control('nombre_app', ['type' => 'text', 'label' => 'Nombre de la aplicación', 'class' => 'form-control']);
                        echo '</div>';
                        echo '<div class="form-group col-md-10">';
                        echo $this->Form->control('descripcion', ['type' => 'textarea', 'label' => 'Descripción', 'class' => 'form-control', 'rows' => '5', 'cols' => '5']);
                                        
                        echo '</div>';
                                //        echo $this->Form->control('fecha_add', ['empty' => true]);
                                //        echo $this->Form->control('fecha_mod', ['empty' => true]);
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
