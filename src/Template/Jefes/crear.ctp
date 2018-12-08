<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jefe $jefe
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
        <div class="panel-title">Nuevo jefe de grupo</div>
        <div class="panel-body">
            <fieldset>
                <div class="form-group">
                    <?php
                        echo $this->Form->create($jefe);
                        echo '<div class="form-group col-md-10" has-error>';
                        echo $this->Form->control('nombre', ['type' => 'text','label' => 'Nombre','class' => 'form-control has-error']);
                        echo '<span class="input-group-addon"><i class="glyphicon glyphicon-remove-circle"></i></span>';
                        echo '</div>';
                        echo '<span class="help-block"><i class="fa fa-warning"></i> Campo obligatorio</span>';
                        
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
          