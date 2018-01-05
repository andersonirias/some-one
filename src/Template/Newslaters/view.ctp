<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Newslater'), ['action' => 'edit', $newslater->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Newslater'), ['action' => 'delete', $newslater->id], ['confirm' => __('Are you sure you want to delete # {0}?', $newslater->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Newslaters'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Newslater'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="newslaters view large-9 medium-8 columns content">
    <h3><?= h($newslater->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($newslater->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($newslater->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($newslater->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= $this->Number->format($newslater->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criacao') ?></th>
            <td><?= h($newslater->criacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alteracao') ?></th>
            <td><?= h($newslater->alteracao) ?></td>
        </tr>
    </table>
</div>
