<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Grupo $grupo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Aciones') ?></li>
        <li><?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'eliminar', $grupo->id],
                ['confirm' => __('Está seguro de eliminar el grupo de trabajo con identificador # {0}?', $grupo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Ver todos'), ['action' => 'listar']) ?></li>
    </ul>
</nav>
<div class="grupos form large-9 medium-8 columns content">
    <?= $this->Form->create($grupo) ?>
    <fieldset>
        <legend><?= __('Editar datos Grupo de trabajo') ?></legend>
        <?php
            echo $this->Form->label('Jefe de Grupo');
            echo $this->Form->select('id_jefe', $data);
            echo $this->Form->control('alias',['label' => 'Nombre grupo']);
            echo $this->Form->control('seccion', ['label' => 'Sección']);
    //        echo $this->Form->control('fecha_add', ['empty' => true]);
    //        echo $this->Form->control('fecha_mod', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
