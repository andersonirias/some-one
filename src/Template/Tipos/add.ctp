<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tipos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tipos form large-9 medium-8 columns content">
    <?= $this->Form->create($tipo) ?>
    <fieldset>
        <legend><?= __('Add Tipo') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('descricao');
            echo $this->Form->input('criacao');
            echo $this->Form->input('alteracao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
