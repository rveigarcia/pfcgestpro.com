<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contenido $contenido
 */
?>
<div class="content-box-large">
    <p>
        <button class="btn btn-primary">
            <?= $this->Html->link(__('Ver'), ['action' => 'ver', $contenido->id]) ?>
        </button>
        <button class="btn btn-primary"><?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $contenido->id], ['confirm' => __('Está seguro de eliminar el contenido con identificador # {0}?', $contenido->id)]) ?></button>
        <button class="btn btn-primary"><?= $this->Html->link(__('Todos'), ['action' => 'listar']) ?> </button>
        <button class="btn btn-primary"><?= $this->Html->link(__('Crear'), ['action' => 'seleccionarinformeparacrear']) ?></button>
    </p>  
    <div class="panel-heading">
        <div class="panel-title">Nuevo Contenido</div>
        <div class="panel-body">
            <fieldset>
                <div class="form-group">
                    <?php 
                        echo $this->Form->create($contenido);
                        echo '<div class="form-group col-md-10">';
                        echo $this->Form->control('id_tecnico', ['type' => 'select','label' => 'Técnico', 'options' => $dataA, 'class' => 'form-control']);
                        echo '</div>';
                        echo '<div class="form-group col-md-10">';
                        echo $this->Form->control('id_informe', ['type' => 'select','label' => 'Informe', 'options' => $dataB, 'class' => 'form-control']);
                        echo '</div>'; 
                        echo '<div class="form-group col-md-10">';
                        echo $this->Form->control('id_fase', ['type' => 'select','label' => 'Fase', 'options' => $dataC, 'class' => 'form-control']);
                        echo '</div>';
                        echo '<div class="form-group col-md-10">';
                        echo $this->Form->control('concepto', ['type' => 'text', 'label' => 'Concepto', 'class' => 'form-control']);
                        echo '</div>';
                        echo '<div class="form-group col-md-10">';
                        echo $this->Form->control('descripcion', ['type' => 'textarea', 'label' => 'Descripción', 'class' => 'form-control', 'rows' => '5', 'cols' => '5']);
                        echo '</div>';
                        echo '<div class="form-group col-md-10">';
                        echo '<label for="calendario">Inicio</label>';
                        echo '<input class="form-control" type="date" id="calendario" name="fecha_ini">';
                        echo '</div>';
                        echo '<div class="form-group col-md-10">';
                        echo '<label for="calendario">Fin</label>';
                        echo '<input class="form-control" type="date" id="calendario" name="fecha_fin">';
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
