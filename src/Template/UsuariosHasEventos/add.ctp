<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Usuarios Has Eventos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="usuariosHasEventos form large-9 medium-8 columns content">
    <?= $this->Form->create($usuariosHasEvento) ?>
    <fieldset>
        <legend><?= __('Add Usuarios Has Evento') ?></legend>
        <?php
            echo $this->Form->input('usuario');
            echo $this->Form->input('evento');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
