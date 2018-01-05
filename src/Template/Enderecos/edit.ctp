<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar Endereço'),
                ['action' => 'delete', $endereco->id],
                ['confirm' => __('Deseja realmente excluir o endereço  # {0}?', $endereco->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Endereços'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Endereço'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Eventos'), ['controller' => 'eventos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Cadastrar Evento'), ['controller' => 'eventos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="enderecos form large-9 medium-8 columns content">
    <?= $this->Form->create($endereco) ?>
    <fieldset>
        <legend><?= __('Edit Endereco') ?></legend>
        <?php
            echo $this->Form->input('rua');
            echo $this->Form->input('bairro');
            echo $this->Form->input('cidade');
            echo $this->Form->input('complemento');
            echo $this->Form->input('uf');
            echo $this->Form->input('numero');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
