<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Someone Eventos</title>
    
    <?= $this->Html->css('../bootstrap/css/bootstrap.min.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('animate.css') ?>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <?= $this->Html->css('owl.carousel.css') ?>
    <?= $this->Html->css('skippr.css') ?>
    <?= $this->Html->css('owl.theme.default.min.css') ?>
    <?= $this->Html->css('datatable.css') ?>

    <?= $this->Html->script('jquery-1.11.1.js') ?>
 
  </head>
  <body>
    <nav  class="nav navbar-fixed-top navbar-inverse navbar-transparente">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao">
          <span class="sr-only">Alternar Navegação</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span></button>
          <a href="/some-one/app/" class="navbar-brand">
            <span class="img-logo"><?= $this->Html->image('some.png',['width' =>'100%']) ?>SomeOne</span>
          </a>
        </div>
        <div class="collapse navbar-collapse" id="barra-navegacao">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/some-one/app/">EVENTOS</a></li>
            <li><a href="#">SOBRE</a></li>
            <li></li>
            <li class="login"><a href="#" data-toggle="modal" data-target="#publicarEvento">PRODUTOR</a></li>
            <button class="cadastre" data-toggle="modal" data-target="#publicarEvento">PUBLICAR EVENTO</button>
            <div class="element_to_pop_up">
              <h3><span class="txt-pop-subs">Quando Onde Como ?</span> <div class="txt-pop-subs-2">Receba Tudo Sobre Novos Eventos</div></h3> 
              <form class="frm-subs" method="post">
                <input class="inp-subs" type="email">
                <input type="submit" name="subs" class="btn-subs">
              </form> 
            </div>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Modal Login-->
    <div class="modal fade" id="publicarEvento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="col-sm-6">
              <h3 class="modal-title" id="exampleModalLabel">Login</h3>
            </div>
            <div class="col-sm-6">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
          <div class="modal-body">
            <form method="POST" action="/some-one/app/produtores/login">
              <div class="form-group">
                <label>Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Digíte seu Email">
              </div>
              <div class="form-group">
                <label>Senha</label>
                <input type="password" class="form-control" name="senha" placeholder="Digíte sua senha">
              </div>
              <span>
                Esqueceu sua senha ?
                <a data-toggle="modal" data-target="#esqueciSenha" data-dismiss="modal">Clique aqui.</a>
              </span>
              <br/><br/>
              <button type="submit" class="btn btn-login">Login</button>
            </form>
          </div>
          <div class="modal-footer">
            <center>
             <span>Não possui uma conta? <a data-toggle="modal" data-target="#formularioCadastro" data-dismiss="modal">Cadastre-se! </a></span>
            </center>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Esqueci minha senha -->
    <div class="modal fade" id="esqueciSenha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="col-sm-6">
              <h3 class="modal-title" id="exampleModalLabel">Recuperar Senha</h3>
            </div>
            <div class="col-sm-6">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digíte seu Email">
              </div>
              <br/>
              <button type="submit" class="btn btn-login">Enviar</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal formulário de cadastro -->
    <div class="modal fade" id="formularioCadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="col-sm-6">
              <h3 class="modal-title" id="exampleModalLabel">Criar conta</h3>
            </div>
            <div class="col-sm-6">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
          <div class="modal-body">
            <form method="POST" action="/some-one/app/produtores/add">
              <div class="form-group">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Digíte seu Nome">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Sobrenome</label>
                <input type="text" class="form-control" name="sobrenome" placeholder="Digíte seu Sobrenome">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Telefone</label>
                <input type="text" class="form-control" name="telefone"  placeholder="Digíte seu telefone">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Digíte seu Email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" class="form-control" name="senha" placeholder="Digíte sua senha">
              </div>
              <button type="submit" class="btn btn-login">Cadastrar</button>
            </form>
          </div>
          <div class="modal-footer">
            <center>
              <span>Já possui uma conta? <a data-toggle="modal" data-target="#publicarEvento" data-dismiss="modal">Faça login! </a></span>
            </center>
          </div>
        </div>
      </div>
    </div>

    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

    <footer id="rodape">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <span class="img-logo"><?= $this->Html->image('some.png',['width' =>'100%']) ?>Someone</span>
          </div>
          <div class="col-md-2">
            <h4>Empresa</h4>
            <ul class="nav">
              <li><a href="#">Sobre</a></li>
              <li><a href="#">Empregos</a></li>
              <li><a href="#">Imprensa</a></li>
              <li><a href="#">Novidades</a></li>
            </ul>
          </div>
          <div class="col-md-2">
            <h4>Comunidades</h4>
            <ul class="nav">
              <li><a href="#">Artistas</a></li>
              <li><a href="#">Produtores</a></li>
              <li><a href="#">Marcas</a></li>
            </ul>
          </div>
          <div class="col-md-2">
            <h4>links Uteis</h4>
            <ul class="nav">
              <li><a href="#">Ajuda</a></li>
              <li><a href="#">Presentes</a></li>
              <li><a href="#">Player da Web</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="nav">
              <li class="item-rede-social"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li class="item-rede-social"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li class="item-rede-social"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <?= $this->Html->script('skippr.js') ?>
    <?= $this->Html->script('script.js') ?>
    <?= $this->Html->script('../bootstrap/js/bootstrap.min.js') ?>
    <?= $this->Html->script('owl.carousel.min.js') ?>
    <?= $this->Html->script('jquery.bpopup.min.js') ?>
    <?= $this->Html->script('datatables.js') ?>
  </body>
</html>
