<?php
/**
  * @var \App\View\AppView $this
  */
 
?>
    <div class="video-background">
      <div class="video-foreground">
		<iframe id="myvideo" src="https://www.youtube.com/embed/3Zy6ai9jtgY?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
    <div id="theTarget">
      <div class="slide-skp"> 
        <div class="tagline">
          <h1>SomeOne.</h1>
          <p>Não sabe Onde, quando e como ir ? ESCOLHA SUA DATA AGORA!.</p>
          <button class="btn-slide" data-toggle="modal" data-target="#buscarEvento" data-dismiss="modal">escolha seu evento</button>
        </div>    
      </div>
      <div class="slide-skp"></div>
      <div class="slide-skp"></div>  
    </div>            
    <div class="send">
      <i class="fa fa-cog" aria-hidden="true"></i>
    </div>

    <div class="header">  

      <div class="date">
        <h3 class="title-date">
          <div class="txt-date">
            <img class="shake" src="img/arrow.png">Não sabe onde, quando e como ir? 
            <span class="spn-info-date">escolha sua data agora!</span>
          </div>
        </h3>
        <div id="owl-demo" class="owl-carousel owl-theme">
          <?php foreach ($calendarioEventos as $calendario): ?>
            <a href="/some-one/app/eventos/data/<?= $calendario['data'] ?>" >
              <div class="item">
                <h4 class="day"><?= $calendario['diaSemana'] ?></h4>
                <h1><?= $calendario['dia'] ?></h1 >
                <h4 class="month"><?= $calendario['mes'] ?></h4>
              </div>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    
      <div class="destaque">
        <h5 class="title-destaque">EVENTOS EM DESTAQUE</h5>
        <div class="owl-carousel owl-theme">
          <?php foreach ($eventosDestaque as $evento): ?>
            <a href="/some-one/app/eventos/adicionar-nome/<?=$evento->id?>">
              <div class="item-destaque">
                <div class="hover-destaque">
                  <i class="fa fa-user-plus" aria-hidden="true"></i>
                  <div class="txt-item-destaque">add nome na lista</div>
                </div>
                <?=$this->Html->image($evento->imagem,['class' => 'img-capa']);?>
                <h5 class="name-event"><?=$evento->titulo?></h5>
              </div>
            </a>
          <?php endforeach; ?>         
        </div>      
      </div>
        
      <div class="shows">
        <h5 class="title-shows">CATEGORIAS</h5>        
        <div class="owl-carousel owl-theme">
          <?php foreach ($categorias as $categoria): ?>
            <a href="/some-one/app/eventos/categorias/<?=$categoria->id?>">
              <div class="item-destaque">
                <div class="hover-destaque">
                  <h4>Ver mais <?=$categoria->nome?></h4>
                </div>
                <img class="img-capa" src="img/categorias/<?=$categoria->nome?>.jpg">
                <!--<img src="img/categorias/<?=$categoria->nome?>.jpg">-->
                <h5 class="name-event"><?=$categoria->nome?></h5>
                 <br/>
              </div>
            </a>
          <?php endforeach; ?>       
        </div>      
      </div>

      <div class="news">
        <h3><span class="news-bold">Quando Onde Como ?</span> Tudo Sobre Novos Eventos <button class="btn-news">CADASTRAR E-MAIL</button></h3> 
      </div>
      
    </div>

    <!-- Modal procurar evento -->
    <div class="modal fade" id="buscarEvento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="col-sm-6">
              <h3 class="modal-title" id="exampleModalLabel">Buscar Evento</h3>
            </div>
            <div class="col-sm-6">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
          <div class="modal-body">
            <form method="post" action="/some-one/app/eventos/busca">
              <div class="form-group">
                <label>Título do Evento</label>
                <input type="text" class="form-control" name="titulo" placeholder="Título do Evento">
              </div>
              <div class="form-group">
                <label>Categoria</label>
                <select name="categoria" class="form-control" >
                  <option value="0">Escolha</option>
                  <?php foreach ($categorias as $categoria): ?>
                    <option value="<?=$categoria->id?>"><?=$categoria->nome?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label>Tipo de Evento</label>
                <select name="tipo" class="form-control" >
                  <option value="0">Escolha</option>
                  <?php foreach ($tipos as $tipo): ?>
                    <option value="<?=$tipo->id?>"><?=$tipo->nome?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <br/>
              <button type="submit" class="btn btn-login">Buscar</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal de Eventos do dia  Exemplo do dia: 15 do mês 10-->
    <div class="modal fade" id="eventosDia1510" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <br/>
          <div class="col-sm-8">
            <span class="titulo-eventos-dia"> Eventos do dia 15/10</span>
          </div>
          <div class="col-sm-4">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <br/><br/><br/>
          <div class="modal-body">
            <table class="table table-hover">
              <tbody>
                <tr>
                  <td>Baile de máscaras da estudantina</td>
                  <td><a class="btn btn-login" data-toggle="modal" data-target="#eventoID" data-dismiss="modal">Ver evento</a></td>
                </tr>
                <tr>
                  <td>Festa na piscina</td>
                  <td><a class="btn btn-login" data-toggle="modal" data-target="#" data-dismiss="modal">Ver evento</a></td>
                </tr>
                <tr>
                  <td>Pagode da vila</td>
                  <td><a class="btn btn-login" data-toggle="modal" data-target="#" data-dismiss="modal">Ver evento</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>