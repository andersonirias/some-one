<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Newslaters'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="newslaters form large-9 medium-8 columns content">
    <?= $this->Form->create($newslater) ?>
    <fieldset>
        <legend><?= __('Add Newslater') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('email');
            echo $this->Form->input('telefone');
            echo $this->Form->input('criacao');
            echo $this->Form->input('alteracao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
