<?php
/**
  * @var \App\View\AppView $this
  */
?>
<style>
  body{
  	background-color: #000000;
  }
  html{overflow-x: hidden;}
</style>
<div class="tabela">
      <table id="example" class="display" cellspacing="0" width="99%">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Local</th>
                <th>Classificação</th>
                <th>Data</th>
            </tr>
        </thead>
        <tfoot>
            <tr class="embaixo">
                <th>Nome</th>
                <th>Local</th>
                <th>Classificação</th>
                <th>Data</th>
            </tr>
        </tfoot>
        <tbody>
            <?php $i = 0; ?>
            <?php foreach ($eventos as $evento): ?>
                <tr>
                    <td><a href="/some-one/app/eventos/adicionar-nome/<?=$evento->id?>"><?=$evento->titulo?></a></td>
                    <td><?=$evento->endereco?></td>
                    <?php
                        if($evento->classificacao == 'livre'){
                            echo '<td><span class="green">Livre</span></td>';
                        }else if($evento->classificacao == '16'){
                            echo '<td><span class="blue">16</span></td>';
                        }else if($evento->classificacao == '18'){
                            echo '<td><span class="pink">18</span></td>';
                        }
                    ?>
                    <td><?=date_format($evento->data, "d/m/Y")?></td>
                </tr>
                <?php $i++ ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php 
        $i = 9 - $i;

        while($i > 0){ 
            echo '<br/>';
            $i--;
        }
    ?>
</div>
