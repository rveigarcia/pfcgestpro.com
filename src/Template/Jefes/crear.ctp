<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jefe $jefe
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Ver todos'), ['action' => 'listar']) ?></li>
    </ul>
</nav>
<div class="jefes form large-9 medium-8 columns content">
    <?= $this->Form->create($jefe) ?>
    <fieldset>
        <legend><?= __('Crear jefe de grupo') ?></legend>
        <?php
            echo $this->Form->control('nombre', ['label' => 'Nombre']);
            echo $this->Form->control('apellidos', ['label' => 'Primer Apellidos']);
            echo $this->Form->control('direccion',['label' => 'Dirección']);
            echo $this->Form->control('email', ['label' => 'Correo electrónico']);
//            echo $this->Form->control('fecha_add', ['empty' => true]);
//            echo $this->Form->control('fecha_mod', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
