<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar Cadastro'), ['action' => 'edit']) ?> </li>
        <li><?= $this->Html->link(__('Listar Eventos'), ['controller' => 'eventos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Cadastrar Evento'), ['controller' => 'eventos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="produtores view large-9 medium-8 columns content">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($produtore->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($produtore->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= $produtore->telefone ?></td>
        </tr>
    </table>
</div>
