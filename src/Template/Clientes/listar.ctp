<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente[]|\Cake\Collection\CollectionInterface $clientes
 */
?>
<div class="container-fluid">
    <div class="panel-heading">
        <div class="panel-title">Clientres registrados</div>
        <button class="btn btn-primary"><?= $this->Html->link(__('Crear'), ['action' => 'crear']) ?> </button>
    </div>
    <div class="panel-body table-responsive">
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id', ['label' => 'ID']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('nombre', ['label' => 'Nombre']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('apellidos', ['label' => 'Apellidos']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('direccion', ['label' => 'Dirección']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('email', ['label' => 'Correo electrónico']) ?></th>
                    <th scope="col" class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente): ?>
                    <tr>
                        <td><?= $this->Number->format($cliente->id) ?></td>
                        <td><?= h($cliente->nombre) ?></td>
                        <td><?= h($cliente->apellidos) ?></td>
                        <td><?= h($cliente->direccion) ?></td>
                        <td><?= h($cliente->email) ?></td>
                        <td class="actions">
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Html->link(__('Ver'), ['action' => 'ver', $cliente->id]) ?>
                            </button>
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Html->link(__('Editar'), ['action' => 'editar', $cliente->id]) ?>
                            </button>
                            <button class="btn btn-primary btn-xs">
                                <?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminar', $cliente->id], ['confirm' => __('Está seguro de eliminar el cliente con identificador # {0}?', $cliente->id)]) ?>
                            </button> 
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
      <!--          <div class="paginator">
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
