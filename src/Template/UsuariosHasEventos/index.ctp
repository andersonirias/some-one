<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Usuarios Has Evento'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usuariosHasEventos index large-9 medium-8 columns content">
    <h3><?= __('Usuarios Has Eventos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('evento') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuariosHasEventos as $usuariosHasEvento): ?>
            <tr>
                <td><?= $this->Number->format($usuariosHasEvento->id) ?></td>
                <td><?= $this->Number->format($usuariosHasEvento->usuario) ?></td>
                <td><?= $this->Number->format($usuariosHasEvento->evento) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $usuariosHasEvento->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usuariosHasEvento->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usuariosHasEvento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuariosHasEvento->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
