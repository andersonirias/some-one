<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Newslater'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="newslaters index large-9 medium-8 columns content">
    <h3><?= __('Newslaters') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('criacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('alteracao') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($newslaters as $newslater): ?>
            <tr>
                <td><?= $this->Number->format($newslater->id) ?></td>
                <td><?= h($newslater->nome) ?></td>
                <td><?= h($newslater->email) ?></td>
                <td><?= $this->Number->format($newslater->telefone) ?></td>
                <td><?= h($newslater->criacao) ?></td>
                <td><?= h($newslater->alteracao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $newslater->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $newslater->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $newslater->id], ['confirm' => __('Are you sure you want to delete # {0}?', $newslater->id)]) ?>
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
