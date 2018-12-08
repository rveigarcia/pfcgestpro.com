<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<!-- 
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Ver todos'), ['action' => 'listar']) ?></li>
    </ul>
</nav>   -->
<div class="content-box-large">
    <p>
        <button class="btn btn-primary"><?= $this->Html->link(__('Ver todos'), ['action' => 'listar']) ?> </button>
    </p>  
    <div class="panel-heading">
        <div class="panel-title">Nuevo Cliente</div>
        <div class="panel-body">
            <fieldset>
                <div class="form-group">
                    <?php 
                        echo $this->Form->create($cliente);
                        echo '<div class="form-group col-md-10">';
                        echo $this->Form->control('nombre', ['type' => 'text','label' => 'Nombre','class' => 'form-control']);
                        echo '</div>'; 
                        echo '<div class="form-group col-md-10">';
                        echo $this->Form->control('apellidos', ['type' => 'text','label' => 'Apellidos','class' => 'form-control']);
                        echo '</div>'; 
                        echo '<div class="form-group col-md-10">';
                        echo $this->Form->control('direccion', ['type' => 'text','label' => 'Dirección','class' => 'form-control']);
                        echo '</div>';
                        echo '<div class="form-group col-md-10">';
                        echo $this->Form->control('email', ['type' => 'text','label' => 'Correo electrónico','class' => 'form-control']);
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
