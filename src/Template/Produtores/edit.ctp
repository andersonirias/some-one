<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Meus Dados'), ['action' => 'view']) ?></li>
        <li><?= $this->Html->link(__('Listar Eventos'), ['controller' => 'eventos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Cadastrar Evento'), ['controller' => 'eventos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="produtores form large-9 medium-8 columns content">
    <?= $this->Form->create($produtore) ?>
    <fieldset>
        <legend><?= __('Editar cadastro') ?></legend>
        <?php
            echo $this->Form->input('nome');
        ?>
            <div class="input email required">
                <label for="email">Email</label>
                <input type="email" name="email" disabled required="required" maxlength="100" id="email" value="anderson.irias@gmail.com">
            </div>
            <div class="input text">
                <label for="senha">Senha</label>
                <input type="text" name="senha" maxlength="255" id="senha" value="">
            </div>
        <?php
            echo $this->Form->input('telefone');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
