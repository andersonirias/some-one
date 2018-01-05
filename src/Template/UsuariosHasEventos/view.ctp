<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usuarios Has Evento'), ['action' => 'edit', $usuariosHasEvento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuarios Has Evento'), ['action' => 'delete', $usuariosHasEvento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuariosHasEvento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios Has Eventos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuarios Has Evento'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuariosHasEventos view large-9 medium-8 columns content">
    <h3><?= h($usuariosHasEvento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($usuariosHasEvento->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= $this->Number->format($usuariosHasEvento->usuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Evento') ?></th>
            <td><?= $this->Number->format($usuariosHasEvento->evento) ?></td>
        </tr>
    </table>
</div>
