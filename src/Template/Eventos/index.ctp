<?php
/**
  * @var \App\View\AppView $this
  */
  
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Novo Evento'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Meus dados'), ['controller' => 'Produtores','action' => 'view']) ?></li>
    </ul>
</nav>
<div class="eventos index large-9 medium-8 columns content">
    <h3><?= __('Eventos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th colspan="3" scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                <th colspan="2" scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($eventos as $evento): ?>
            <tr>
                <td colspan="3"><?= h($evento->titulo) ?></td>
                <td><?= h(date_format($evento->data,"d/m/Y")) ?></td>
                <td colspan="2" class="actions">
                    <?= $this->Html->link(__('Lista'), ['action' => 'listaEvento', $evento->id]) ?>
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $evento->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $evento->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $evento->id], ['confirm' => __('Deseja realmente excluir o evento # {0}?', $evento->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeira')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próxima') . ' >') ?>
            <?= $this->Paginator->last(__('Última') . ' >>') ?>
        </ul>
    </div>
    <center>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de um total de {{count}}')]) ?></p>
    </center>
</div>
