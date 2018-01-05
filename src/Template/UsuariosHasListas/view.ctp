<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usuarios Has Lista'), ['action' => 'edit', $usuariosHasLista->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuarios Has Lista'), ['action' => 'delete', $usuariosHasLista->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuariosHasLista->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios Has Listas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuarios Has Lista'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuariosHasListas view large-9 medium-8 columns content">
    <h3><?= h($usuariosHasLista->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($usuariosHasLista->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= $this->Number->format($usuariosHasLista->usuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lista') ?></th>
            <td><?= $this->Number->format($usuariosHasLista->lista) ?></td>
        </tr>
    </table>
</div>
