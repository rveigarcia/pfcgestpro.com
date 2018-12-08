<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Parciale $parciale
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'eliminar', $parciale->id],
                ['confirm' => __('Está seguro de eliminar el grupo de trabajo con identificador # {0}?', $parciale->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Ver todos'), ['action' => 'listar']) ?></li>
    </ul>
</nav>
<div class="parciales form large-9 medium-8 columns content">
    <?= $this->Form->create($parciale) ?>
    <fieldset>
        <legend><?= __('Editar Parcial') ?></legend>
        <?php
            echo $this->Form->label('ID Plazo');
            echo $this->Form->select('id_plazo', $dataA);
            echo $this->Form->label('Fase');
            echo $this->Form->select('id_fase', $dataB);
            echo $this->Form->control('concepto', ['label' => 'Concepto']);
            echo $this->Form->control('descripcion', ['label' => 'Descripción']);
        //    echo $this->Form->control('fecha_ini_teorica', ['empty' => true]);
        //    echo $this->Form->control('fecha_fin_teorica', ['empty' => true]);
        //    echo $this->Form->control('fecha_ini_tarea', ['empty' => true]);
        //    echo $this->Form->control('fecha_fin_tarea', ['empty' => true]);
        //    echo $this->Form->control('fecha_add', ['empty' => true]);
        //    echo $this->Form->control('fecha_mod', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
