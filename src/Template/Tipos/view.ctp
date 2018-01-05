<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tipo'), ['action' => 'edit', $tipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipo'), ['action' => 'delete', $tipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tipos view large-9 medium-8 columns content">
    <h3><?= h($tipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($tipo->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($tipo->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tipo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criacao') ?></th>
            <td><?= h($tipo->criacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alteracao') ?></th>
            <td><?= h($tipo->alteracao) ?></td>
        </tr>
    </table>
</div>
