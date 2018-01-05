<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Form->postLink(
                __('Excluir evento'),
                ['action' => 'delete', $evento->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $evento->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Eventos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Cadastrar Endereço'), ['controller' => 'enderecos','action' => 'add']) ?></li>
    </ul>
</nav>
<div class="eventos form large-9 medium-8 columns content">
    <?= $this->Form->create($evento) ?>
    <fieldset>
        <legend><?= __('Editar Evento') ?></legend>
        <?php
            echo $this->Form->input('titulo');
            echo $this->Form->input('descricao');
            echo $this->Form->input('data');
        ?>
            <div class="input number required">
                <label for="tempoduracao">Horas de duração do evento</label>
                <input type="number" name="tempoduracao" required="required" id="tempoduracao" value="<?= ($evento->tempoduracao / 60)?>">
            </div>
            <div class="input select required">
                <label for="categoria">Categoria</label>
                <select name="categoria" required="required" id="categoria">
                    <?php 
                        foreach ($categorias as $categoria) {
                            if($categoria->id == $evento->categoria)
                                echo '<option selected="selected" value=' . $categoria->id . '>' . $categoria->nome . '</option>';
                            else
                                echo '<option value=' . $categoria->id . '>' . $categoria->nome . '</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="input select required">
                <label for="endereco">Endereço</label>
                <select name="endereco" required="required" id="endereco">
                    <?php 
                        foreach ($enderecos as $endereco) {
                            if($endereco->id == $evento->endereco)
                                echo '<option selected="selected" value=' . $endereco->id . '>' . $endereco->rua . '</option>';
                            else
                                echo '<option value=' . $endereco->id . '>' . $endereco->rua . '</option>';
                        }
                    ?>
                </select>
            </div>
    </fieldset>
    <?= $this->Form->button(__('Editar')) ?>
    <?= $this->Form->end() ?>
</div>
