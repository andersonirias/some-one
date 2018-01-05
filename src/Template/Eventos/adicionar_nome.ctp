<?php
/**
  * @var \App\View\AppView $this
  */
?>
<style type="text/css">
  body{
  	background-color: #000000;
  }
  .img-apr{
  	max-height: 400px;
  	max-width: 650px;
  }
</style>
<div class="descricao-event">
  <div class="row">
    <div class="col-md-8">    
      <div class="foto-event">
      	<?php 
      	    if($imagem){
	      		if($imagem->tipo == 'imagem'){
	      			echo $this->Html->image($imagem->caminho,['class' => 'img-apr']);
	      		}else if($imagem->tipo == 'video'){
	      			echo '<iframe class="video-event"  src="' . $imagem->caminho . '" frameborder="0" allowfullscreen></iframe>';
	      		}
	      	}
      	?>
      </div>
    </div>
    <div class="col-md-4">
	  <h1 class="title-event-desc"><?=$evento->titulo?></h1>
	  <h5 class="desc"><?=$evento->descricao?></h5>
	  <br/>
	  <div class="col-md-12">
	  	<center>
	  	  <button class="btn-nome-lista" data-toggle="modal" data-target="#cadastrarEmail">adicionar nome</button>
	  	</center>
	  </div>
	  <br/><br/><br/>
	</div>
	<center>
	  <a href="/some-one/app/eventos/produtor/<?=$evento->produtor?>">
	    <h2 class="title-next-event">mais eventos <span class="spn-next-event"> do produtor</span></h2>
	  </a>
	</center>
  </div>
</div> 
<br/><br/><br/>
<div class="all-rigth2"></div>
  <h5 class="title-destaque" style="color:#fff">SAIBA COMO CHEGAR <span class="mais"> Ver Mais <i class="fa fa-plus" aria-hidden="true"></i></span></h5>
  <div id="map"></div>
  <script>
    function initMap() {
      // Styles a map in night mode.
      var map = new google.maps.Map(document.getElementById('map'), {
         center: {lat: -19.939936, lng:  -43.931016},
         zoom: 16,
         position: {lat: -19.939936, lng:  -43.931016},
         styles: [
				  {
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#212121"
				      }
				    ]
				  },
				  {
				    "elementType": "labels.icon",
				    "stylers": [
				      {
				        "visibility": "on"
				      }
				    ]
				  },
				  {
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#757575"
				      }
				    ]
				  },
				  {
				    "elementType": "labels.text.stroke",
				    "stylers": [
				      {
				        "color": "#212121"
				      }
				    ]
				  },
				  {
				    "featureType": "administrative",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#757575"
				      },
				      {
				        "visibility": "off"
				      }
				    ]
				  },
				  {
				    "featureType": "administrative.country",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#9e9e9e"
				      }
				    ]
				  },
				  {
				    "featureType": "administrative.land_parcel",
				    "stylers": [
				      {
				        "visibility": "off"
				      }
				    ]
				  },
				  {
				    "featureType": "administrative.locality",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#bdbdbd"
				      }
				    ]
				  },
				  {
				    "featureType": "poi",
				    "stylers": [
				      {
				        "visibility": "off"
				      }
				    ]
				  },
				  {
				    "featureType": "poi",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#757575"
				      }
				    ]
				  },
				  {
				    "featureType": "poi.park",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#181818"
				      }
				    ]
				  },
				  {
				    "featureType": "poi.park",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#616161"
				      }
				    ]
				  },
				  {
				    "featureType": "poi.park",
				    "elementType": "labels.text.stroke",
				    "stylers": [
				      {
				        "color": "#1b1b1b"
				      }
				    ]
				  },
				  {
				    "featureType": "road",
				    "elementType": "geometry.fill",
				    "stylers": [
				      {
				        "color": "#2c2c2c"
				      }
				    ]
				  },
				  {
				    "featureType": "road",
				    "elementType": "labels.icon",
				    "stylers": [
				      {
				        "visibility": "off"
				      }
				    ]
				  },
				  {
				    "featureType": "road",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#8a8a8a"
				      }
				    ]
				  },
				  {
				    "featureType": "road.arterial",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#373737"
				      }
				    ]
				  },
				  {
				    "featureType": "road.highway",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#3c3c3c"
				      }
				    ]
				  },
				  {
				    "featureType": "road.highway.controlled_access",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#4e4e4e"
				      }
				    ]
				  },
				  {
				    "featureType": "road.local",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#616161"
				      }
				    ]
				  },
				  {
				    "featureType": "transit",
				    "stylers": [
				      {
				        "visibility": "off"
				      }
				    ]
				  },
				  {
				    "featureType": "transit",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#757575"
				      }
				    ]
				  },
				  {
				    "featureType": "water",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#000000"
				      }
				    ]
				  },
				             
				  {
				    "featureType": "water",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#3d3d3d"
				      }
				    ]
				  }                                    
				]           
				 });
			}
  </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVpsoqFytlMCJQHMI7TXwJbSvZAtlNLuI&callback=initMap">
  </script>
<!-- Modal add nome lista -->
    <div class="modal fade" id="cadastrarEmail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="col-sm-6">
              <h3 class="modal-title" id="exampleModalLabel">Nome na Lista</h3>
            </div>
            <div class="col-sm-6">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
          <div class="modal-body">
            <form method="post" action="evenos/adicionar_nome">
              <div class="form-group">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="nome" placeholder="Digíte seu Nome">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Digíte seu Email">
              </div><br/>
              <input type="hidden" name="evento" value="<?=$evento->id?>">
              <button type="submit" class="btn btn-login">Enviar</button>
            </form>
          </div>
        </div>
      </div>
    </div>