<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proyecto[]|\Cake\Collection\CollectionInterface $proyectos
 */
?>
<!--
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Crear nuevo'), ['action' => 'crear']) ?></li>
        <li><?= $this->Html->link(__('TÉCNICOS'), ['controller'=> 'Tecnicos', 'action' => 'listar']) ?></li>  
    </ul>
</nav>  -->
<div class="container-fluid">
    <div class="panel-heading">
        <div class="panel-title">Proyectos registrados</div>
        <button class="btn btn-primary"><?= $this->Html->link(__('Crear'), ['action' => 'crear']) ?> </button>
    </div>
    <div class="panel-body table-responsive">
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
            <thead>
                <tr>
                    <th scope="col">
                        <?= $this->Paginator->sort('id', ['label' => 'ID']) ?>
                    </th>
                    <th scope="col">
                        <?= $this->Paginator->sort('Grupos.alias', 'Alias grupos') ?>
                    </th>   
                    <th scope="col">
                        <?= $this->Paginator->sort('Estado.valor', 'Estado') ?>
                    </th>
                    <th scope="col">
                        <?= $this->Paginator->sort('Clientes.nombre', 'Nombre Cliente') ?>
                    </th>
                    <th scope="col">
                        <?= $this->Paginator->sort('nombre_app', ['label' => 'Nombre aplicación']) ?>
                    </th>       
                    <th scope="col" class="actions">
                        <?= __('Acciones') ?>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($proyectos as $proyecto): ?>
                    <tr>
                        <td><?= $this->Number->format($proyecto->id) ?></td>
                        <td><?= h($proyecto->grupo->alias) ?></td>   
                        <td><?= h($proyecto->estado->valor) ?></td>
                        <td><?= h($proyecto->cliente->nombre . ' ' . $proyecto->cliente->apellidos) ?></td>
                        <td><?= h($proyecto->nombre_app) ?></td>
                        <td class="actions">
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Html->link(__('Ver'), ['action' => 'ver', $proyecto->id]) ?>
                            </button>
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Html->link(__('Editar'), ['action' => 'editar', $proyecto->id]) ?>
                            </button>
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $proyecto->id], ['confirm' => __('Está seguro de eliminar el proyecto con identificador # {0}?', $proyecto->id)]) ?>
                            </button>
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Html->link(__('Crear'), ['action' => 'crear']) ?>
                            </button>   
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
 <!--   <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first')) ?>
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
                <?= $this->Paginator->last(__('last') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
        </div>  -->
    </div>            
</div>
