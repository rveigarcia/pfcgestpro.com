<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tecnico $tecnico
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tecnicos'), ['action' => 'listar']) ?></li>
    </ul>
</nav>
<div class="tecnicos form large-9 medium-8 columns content">
    <?= $this->Form->create($tecnico) ?>
    <fieldset>
        <legend><?= __('Add Tecnico') ?></legend>
        <?php
            echo $this->Form->label('Jefe de Grupo');
            echo $this->Form->select('id_grupo', $data);
            echo $this->Form->control('nombre', ['label' => 'Nombre']);
            echo $this->Form->control('apellidos', ['label' => 'Apellidos']);
  //          echo $this->Form->control('tipo', ['label' => 'Tipo']);
            echo $this->Form->label('Tipo');
            echo $this->Form->select('tipo',[
                '1' => 'Sistemas',
                '2' => 'Desarrollador',
                '3' => 'Diseñador'
                ]
            );

            echo $this->Form->control('direccion',['label' => 'Dirección']);
            echo $this->Form->control('email', ['label' => 'Correo electrónico']);
       //     echo $this->Form->control('fecha_add', ['empty' => true]);
       //     echo $this->Form->control('fecha_mod', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
