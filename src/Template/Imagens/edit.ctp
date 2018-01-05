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
                ['action' => 'delete', $imagen->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $imagen->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Imagens'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="imagens form large-9 medium-8 columns content">
    <?= $this->Form->create($imagen) ?>
    <fieldset>
        <legend><?= __('Edit Imagen') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('caminho');
            echo $this->Form->input('evento');
            echo $this->Form->input('criacao');
            echo $this->Form->input('alteracao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
