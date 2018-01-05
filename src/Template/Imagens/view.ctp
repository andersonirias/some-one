<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Imagen'), ['action' => 'edit', $imagen->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Imagen'), ['action' => 'delete', $imagen->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagen->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Imagens'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Imagen'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="imagens view large-9 medium-8 columns content">
    <h3><?= h($imagen->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($imagen->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Caminho') ?></th>
            <td><?= h($imagen->caminho) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($imagen->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Evento') ?></th>
            <td><?= $this->Number->format($imagen->evento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criacao') ?></th>
            <td><?= h($imagen->criacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alteracao') ?></th>
            <td><?= h($imagen->alteracao) ?></td>
        </tr>
    </table>
</div>
