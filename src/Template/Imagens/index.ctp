<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Imagen'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="imagens index large-9 medium-8 columns content">
    <h3><?= __('Imagens') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('caminho') ?></th>
                <th scope="col"><?= $this->Paginator->sort('evento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('criacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('alteracao') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($imagens as $imagen): ?>
            <tr>
                <td><?= $this->Number->format($imagen->id) ?></td>
                <td><?= h($imagen->nome) ?></td>
                <td><?= h($imagen->caminho) ?></td>
                <td><?= $this->Number->format($imagen->evento) ?></td>
                <td><?= h($imagen->criacao) ?></td>
                <td><?= h($imagen->alteracao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $imagen->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $imagen->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $imagen->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagen->id)]) ?>
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
