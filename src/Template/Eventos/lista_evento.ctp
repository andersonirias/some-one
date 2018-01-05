<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Novo Evento'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Meus dados'), ['controller' => 'Produtores','action' => 'view']) ?></li>
    </ul>
</nav>
<div class="eventos index large-9 medium-8 columns content">
    <h3><?= __('Lista do Evento') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col">Nome do participante</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= h($usuario->nome) ?></td>
                <td><?= h($usuario->email) ?></td>
                <td><?= h($usuario->telefone) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
