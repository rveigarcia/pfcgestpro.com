<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estado $estado
 */
?>
<div class="content-box-large">
    <p>
        <button class="btn btn-primary"><?= $this->Html->link(__('Ver todos'), ['action' => 'listar']) ?> </button>
    </p>  
    <div class="panel-heading">
        <div class="panel-title">Nuevo Estado</div>
        <div class="panel-body">
            <fieldset>
                <div class="form-group">
                    <?php 
                        echo $this->Form->create($estado);
                        echo '<div class="form-group col-md-10">';
                        echo $this->Form->control('valor', ['type' => 'text', 'label' => 'Valor', 'class' => 'form-control']);
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