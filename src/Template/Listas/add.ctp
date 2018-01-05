<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Listas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="listas form large-9 medium-8 columns content">
    <?= $this->Form->create($lista) ?>
    <fieldset>
        <legend><?= __('Add Lista') ?></legend>
        <?php
            echo $this->Form->input('titulo');
            echo $this->Form->input('descricao');
            echo $this->Form->input('evento');
            echo $this->Form->input('criacao');
            echo $this->Form->input('alteracao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
