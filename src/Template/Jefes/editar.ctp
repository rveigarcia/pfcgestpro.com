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
        <li><?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'eliminar', $jefe->id],
                ['confirm' => __('Seguro que desea eliminar el Jefe de grupo con identificador # {0}?', $jefe->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Ver todos'), ['action' => 'listar']) ?></li>
    </ul>
</nav>    -->
<div class="content-box-large">
    <p>
        <button class="btn btn-primary">
            <?= $this->Html->link(__('Ver'), ['action' => 'ver', $jefe->id]) ?>
        </button>
        <button class="btn btn-primary"><?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $jefe->id], ['confirm' => __('Está seguro de eliminar el jefe de grupo con identificador # {0}?', $jefe->id)]) ?></button>
        <button class="btn btn-primary"><?= $this->Html->link(__('Todos'), ['class' => 'text-white','action' => 'listar']) ?> </button>
        <button class="btn btn-primary"><?= $this->Html->link(__('Crear'), ['action' => 'crear']) ?></button>
    </p> 
    <div class="panel-heading">
        <div class="panel-title">Editar Jefe de grupo</div>
        <div class="panel-body">
            <fieldset> 
                <div class="form-group">
                    <?php 
                        echo $this->Form->create($jefe);
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
    //            echo $this->Form->control('fecha_add', ['empty' => true]);
    //            echo $this->Form->control('fecha_mod', ['empty' => true]);
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
