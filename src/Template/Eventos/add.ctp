<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Listar Eventos'), ['action' => 'index']) ?></li>
         <li><?= $this->Html->link(__('Cadastrar Endereço'), ['controller' => 'enderecos','action' => 'add']) ?></li>
    </ul>
</nav>
<div class="eventos form large-9 medium-8 columns content">
    <?= $this->Form->create($evento,['enctype' => 'multipart/form-data']) ?>
    <fieldset>
        <legend><?= __('Adicionar Evento') ?></legend>
        <?php
            echo $this->Form->input('titulo');
            echo $this->Form->input('descricao');
            echo $this->Form->input('data');
        ?>
            <div class="input number required">
                <label for="tempoduracao">Horas de duração do evento</label>
                <input type="number" name="tempoduracao" required="required" id="tempoduracao">
            </div>
             <div class="input select required">
                <label for="categoria">Categoria</label>
                <select name="categoria" required="required" id="categoria">
                    <?php 
                        foreach ($categorias as $categoria) {
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
            <div class="input number required">
                <label for="tempoduracao">Imagem de divulgação</label>
                <input type="file" name="imagem" >
            </div>
            <div class="input select required">
                <label for="categoria">Classificação</label>
                <select name="classificacao" required="required">
                    <option value="livre">Livre</option>
                    <option value="16">16</option>
                    <option value="18">18</option>
                </select>
            </div>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
