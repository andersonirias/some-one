<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $newslater->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $newslater->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Newslaters'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="newslaters form large-9 medium-8 columns content">
    <?= $this->Form->create($newslater) ?>
    <fieldset>
        <legend><?= __('Edit Newslater') ?></legend>
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
