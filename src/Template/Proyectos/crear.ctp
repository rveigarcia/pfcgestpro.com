<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proyecto $proyecto
 */
?>
<div class="content-box-large">
    <p>
        <button class="btn btn-primary"><?= $this->Html->link(__('Ver todos'), ['action' => 'listar']) ?> </button>
    </p>  
    <div class="panel-heading">
        <div class="panel-title">Nuevo Proyecto</div>
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















