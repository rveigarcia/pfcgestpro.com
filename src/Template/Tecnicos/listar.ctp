<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tecnico[]|\Cake\Collection\CollectionInterface $tecnicos
 */
?>

<div class="container-fluid">
    <div class="panel-heading">
        <div class="panel-title">Técnicos registrados</div>
        <button class="btn btn-primary"><?= $this->Html->link(__('Crear'), ['action' => 'crear']) ?> </button>
    </div>
    <div class="panel-body table-responsive">
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id', ['label' => 'ID']) ?></th>
                        <!--            <th scope="col"><?= $this->Paginator->sort('id_grupo', ['label' => 'ID grupo de trabajo']) ?></th>   -->
                    <th scope="col"><?= $this->Paginator->sort('Grupos.alias', 'Grupo de trabajo') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('nombre', ['label' => 'Nombre']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('apellidos', ['label' => 'Apellidos']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Categorias.tipo', 'Categoría') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('direccion') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('email') ?></th>
        <!--        <th scope="col"><?= $this->Paginator->sort('fecha_add') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('fecha_mod') ?></th>     -->
                    <th scope="col" class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tecnicos as $tecnico): ?>
                    <tr>
                        <td><?= $this->Number->format($tecnico->id) ?></td>
                        <td><?= h($tecnico->grupo->alias) ?></td>
                        <td><?= h($tecnico->nombre) ?></td>
                        <td><?= h($tecnico->apellidos) ?></td>
                        <td><?= h($tecnico->categoria->tipo) ?></td>
                        <td><?= h($tecnico->direccion) ?></td>
                        <td><?= h($tecnico->email) ?></td>
                        <td class="actions">
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Html->link(__('Ver'), ['action' => 'ver', $tecnico->id]) ?>
                            </button>
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Html->link(__('Editar'), ['action' => 'editar', $tecnico->id]) ?>
                            </button>
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $tecnico->id], ['confirm' => __('Está seguro de eliminar el técnico con identificadore # {0}?', $tecnico->id)]) ?>
                            </button>       
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <!--            <div class="paginator">
                    <ul class="pagination">
                        <?= $this->Paginator->first('<< ' . __('first')) ?>
                        <?= $this->Paginator->prev('< ' . __('previous')) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('next') . ' >') ?>
                        <?= $this->Paginator->last(__('last') . ' >>') ?>
                    </ul>
                    <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
                </div>   -->
    </div>        
</div>
