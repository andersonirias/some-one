<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Novo Endereço'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Eventos'), ['controller' => 'eventos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Cadastrar Evento'), ['controller' => 'eventos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="enderecos index large-9 medium-8 columns content">
    <h3><?= __('Endereços') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>

                <th scope="col"><?= $this->Paginator->sort('rua') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bairro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('complemento') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($enderecos as $endereco): ?>
            <tr>
                <td><?= h($endereco->rua) ?></td>
                <td><?= h($endereco->bairro) ?></td>
                <td><?= h($endereco->cidade) ?></td>
                <td><?= h($endereco->complemento) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $endereco->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $endereco->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $endereco->id], ['confirm' => __('Deseja realmente excluir o endereço # {0}?', $endereco->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
