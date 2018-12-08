<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Informe $informe
 */
?>
<div class="content-box-large">
    <p>
        <button class="btn btn-primary"><?= $this->Html->link(__('Ver todos'), ['action' => 'listar']) ?> </button>
    </p>  
    <div class="panel-heading">
        <div class="panel-title">Nuevo Informe</div>
        <div class="panel-body">
            <fieldset>
                <div class="form-group">
                    <?php 
                        echo $this->Form->create($informe);
                        echo '<div class="form-group col-md-10">';
                        echo $this->Form->control('id_proyecto', ['type' => 'select','label' => 'Poyectos registrados', 'options' => $data, 'class' => 'form-control']);
                        echo '</div>';

                       echo '<div class="form-group form-check col-md-10">';
            //            echo '<label class="col-md-2 control-label">Radios default</label>';
            //            echo '<div class="col-md-10">'
            //            echo '<div class="radio">'
            
                    
                        echo $this->Form->radio(
                            'estudio',
                            [   
                                ['value' => 1, 'text' => 'Estudio', 'class' => 'form-check-inline'],
                                ['text' => 'Desarrollo', 'value' => 0 , 'class' =>'form-check-inline']
                            ]);
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
