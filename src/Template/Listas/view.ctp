<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lista'), ['action' => 'edit', $lista->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lista'), ['action' => 'delete', $lista->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lista->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Listas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lista'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="listas view large-9 medium-8 columns content">
    <h3><?= h($lista->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($lista->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($lista->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($lista->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Evento') ?></th>
            <td><?= $this->Number->format($lista->evento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criacao') ?></th>
            <td><?= h($lista->criacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alteracao') ?></th>
            <td><?= h($lista->alteracao) ?></td>
        </tr>
    </table>
</div>
