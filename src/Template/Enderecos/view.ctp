<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar Endereço'), ['action' => 'edit', $endereco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Endereço'), ['action' => 'delete', $endereco->id], ['confirm' => __('Deseja realmente excluir o endereço # {0}?', $endereco->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Endereços'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Endereço'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Eventos'), ['controller' => 'eventos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Cadastrar Evento'), ['controller' => 'eventos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="enderecos view large-9 medium-8 columns content">
    <h3><?= h($endereco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Rua') ?></th>
            <td><?= h($endereco->rua) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bairro') ?></th>
            <td><?= h($endereco->bairro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cidade') ?></th>
            <td><?= h($endereco->cidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Complemento') ?></th>
            <td><?= h($endereco->complemento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uf') ?></th>
            <td><?= h($endereco->uf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Número') ?></th>
            <td><?= $endereco->numero ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criação') ?></th>
            <td><?= date_format($endereco->criacao,"d/m/Y") ?></td>
        </tr>
    </table>
</div>
