<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar Evento'), ['action' => 'edit', $evento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir Evento'), ['action' => 'delete', $evento->id], ['confirm' => __('Deseja realmente excluir o evento # {0}?', $evento->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Eventos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Evento'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="eventos view large-9 medium-8 columns content">
    <h3><?= h($evento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Título') ?></th>
            <td><?= h($evento->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descrição') ?></th>
            <td><?= h($evento->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tempo de duração') ?></th>
            <td><?= $this->Number->format(($evento->tempoduracao) / 60) . ' Hora(s)' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Curtidas') ?></th>
            <td><?= $this->Number->format($evento->curtidas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descurtidas') ?></th>
            <td><?= $this->Number->format($evento->descurtidas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= $categoria->nome ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endereço') ?></th>
            <td><?= $endereco->rua ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data de realização') ?></th>
            <td><?= h(date_format($evento->data,"d/m/Y")) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data de criação') ?></th>
            <td><?= h(date_format($evento->criacao,"d/m/Y")) ?></td>
        </tr>
    </table>
</div>
