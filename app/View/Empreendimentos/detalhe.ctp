<div id="barra-empreendimentos">
  <a href="<?php echo $this->Html->url('/contato'); ?>" class="barra-item" id="vendemos">
    <p>
      Vendas <br>
      (31) 3372 1539
    </p>
  </a>
  <a href="http://www8.caixa.gov.br/siopiinternet/simulaOperacaoInternet.do?method=inicializarCasoUso" class="barra-item" target="_blank" id="simulamos">
    <p>
      simulador de <br>
      financiamento
    </p>
  </a>
  <a href="<?php echo $this->Html->url('/contato'); ?>" class="barra-item" id="ligamos">
    <p>
      Ligamos <br>
      para você
    </p>
  </a>
</div>
<div id="interna-content">

      <?php echo $this->Element('filtro_interna'); ?>
      
      <section class="empreendimento-container">

        <h2 class="empreendimento-name">
          <?php echo $empreendimento['Empreendimento']['nome'] ?>
        </h2>

        <p class="empreendimento-description">
          <?php echo $empreendimento['Quarto']['nome'] ?>
        </p>

        <div class="empreendimento-highlight">
          <figure class="empreendimento-image">
            <img src="<?php echo $this->Html->url('/files/imagem/arquivo/'.$empreendimento['ImagemDestaque']['id'].'/normal_'.$empreendimento['ImagemDestaque']['arquivo']) ?> ">
          </figure>
          <div class="empreendimento-about">
            <p><?php echo $empreendimento['Empreendimento']['descricao'] ?></p>
            <ul class="atributos">

                <?php foreach($empreendimento['Empreendimento']['atributos'] as $atributo){ ?>

                  <li><span><?php echo $atributo; ?></span></li>

                <?php  } ?>

            </ul>

            <div class="empreendimento-social">
              <div>
                <iframe src="//www.facebook.com/plugins/like.php?href=<?php echo urlencode($this->Html->url('/empreendimentos/detalhe/'.$empreendimento['Empreendimento']['slug'], true)); ?>&amp;send=false&amp;layout=button_count&amp;width=300&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=121280808059399" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:21px;" allowTransparency="true"></iframe>
              </div>
              <div>
                <a href="https://twitter.com/share" class="twitter-share-button" data-via="mondainebrasil">Tweet</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
              </div>  
            </div>
          </div>
           <?php if(isset($private)){ ?>  
                
          <div class="progresso">
            
            <h3>Status da obra</h3>
            <br>
            <br>
            <br>
            <ul class="barra-progresso">
              <li class="progresso-item">
                <p class="progresso-name">
                  Muro de Arrimo e Fechamento
                </p>
                <div class="barra-container">
                  <div class="barra" data-progress="<?php echo $empreendimento['Empreendimento']['muro']; ?>"></div>
                  <div class="valor-progresso" data-progress="<?php echo $empreendimento['Empreendimento']['muro']; ?>">
                    <?php echo $empreendimento['Empreendimento']['muro']; ?>% concluída
                  </div>
                </div>
              </li>

              <li class="progresso-item">
                <p class="progresso-name">
                  Fundação
                </p>
                <div class="barra-container">
                  <div class="barra" data-progress="<?php echo $empreendimento['Empreendimento']['fundacao']; ?>"></div>
                  <div class="valor-progresso" data-progress="<?php echo $empreendimento['Empreendimento']['fundacao']; ?>">
                    <?php echo $empreendimento['Empreendimento']['fundacao']; ?>% concluída
                  </div>
                </div>
              </li>

              <li class="progresso-item">
                <p class="progresso-name">
                  Alvenaria
                </p>
                <div class="barra-container">
                  <div class="barra" data-progress="<?php echo $empreendimento['Empreendimento']['alvenaria']; ?>"></div>
                  <div class="valor-progresso" data-progress="<?php echo $empreendimento['Empreendimento']['alvenaria']; ?>">
                    <?php echo $empreendimento['Empreendimento']['alvenaria']; ?>% concluída
                  </div>
                </div>
              </li>

              <li class="progresso-item">
                <p class="progresso-name">
                  Estrutura
                </p>
                <div class="barra-container">
                  <div class="barra" data-progress="<?php echo $empreendimento['Empreendimento']['estrutura']; ?>"></div>
                  <div class="valor-progresso" data-progress="<?php echo $empreendimento['Empreendimento']['estrutura']; ?>">
                    <?php echo $empreendimento['Empreendimento']['estrutura']; ?>% concluída
                  </div>
                </div>
              </li>

              <li class="progresso-item">
                <p class="progresso-name">
                  Cobertura
                </p>
                <div class="barra-container">
                  <div class="barra" data-progress="<?php echo $empreendimento['Empreendimento']['cobertura']; ?>"></div>
                  <div class="valor-progresso" data-progress="<?php echo $empreendimento['Empreendimento']['cobertura']; ?>">
                    <?php echo $empreendimento['Empreendimento']['cobertura']; ?>% concluída
                  </div>
                </div>
              </li>

              <li class="progresso-item">
                <p class="progresso-name">
                  Esquadrias
                </p>
                <div class="barra-container">
                  <div class="barra" data-progress="<?php echo $empreendimento['Empreendimento']['esquadrias']; ?>"></div>
                  <div class="valor-progresso" data-progress="<?php echo $empreendimento['Empreendimento']['esquadrias']; ?>">
                    <?php echo $empreendimento['Empreendimento']['esquadrias']; ?>% concluída
                  </div>
                </div>
              </li>

              <li class="progresso-item">
                <p class="progresso-name">
                  Instalações
                </p>
                <div class="barra-container">
                  <div class="barra" data-progress="<?php echo $empreendimento['Empreendimento']['instalacoes']; ?>"></div>
                  <div class="valor-progresso" data-progress="<?php echo $empreendimento['Empreendimento']['instalacoes']; ?>">
                    <?php echo $empreendimento['Empreendimento']['instalacoes']; ?>% concluída
                  </div>
                </div>
              </li>

              <li class="progresso-item">
                <p class="progresso-name">
                  Revestimento
                </p>
                <div class="barra-container">
                  <div class="barra" data-progress="<?php echo $empreendimento['Empreendimento']['revestimento']; ?>"></div>
                  <div class="valor-progresso" data-progress="<?php echo $empreendimento['Empreendimento']['revestimento']; ?>">
                    <?php echo $empreendimento['Empreendimento']['revestimento']; ?>% concluída
                  </div>
                </div>
              </li>

               <li class="progresso-item">
                <p class="progresso-name">
                  Pavimentação
                </p>
                <div class="barra-container">
                  <div class="barra" data-progress="<?php echo $empreendimento['Empreendimento']['pavimentacao']; ?>"></div>
                  <div class="valor-progresso" data-progress="<?php echo $empreendimento['Empreendimento']['pavimentacao']; ?>">
                    <?php echo $empreendimento['Empreendimento']['pavimentacao']; ?>% concluída
                  </div>
                </div>
              </li>

              <li class="progresso-item">
                <p class="progresso-name">
                  Pintura
                </p>
                <div class="barra-container">
                  <div class="barra" data-progress="<?php echo $empreendimento['Empreendimento']['pintura']; ?>"></div>
                  <div class="valor-progresso" data-progress="<?php echo $empreendimento['Empreendimento']['pintura']; ?>">
                    <?php echo $empreendimento['Empreendimento']['pintura']; ?>% concluída
                  </div>
                </div>
              </li>
            </ul>
            


    
          </div>
        </div>

        <?php } ?>

        <div class="location">
          <h2 class="location-name">
            Localização
          </h2>

          <!-- gerar mapa -->

    <script type="text/javascript">

    // gmaps
      
      var infowindow = null;
      var map;

var icones = { 
    'beauty_salon': "<?php echo $this->Html->url('/img/pins/', true);  ?>lojas.png",
    'establishment': "<?php echo $this->Html->url('/img/pins/', true);  ?>lojas.png",
    'shopping_mall': "<?php echo $this->Html->url('/img/pins/', true);  ?>mercado.png",        
    'bakery': "<?php echo $this->Html->url('/img/pins/', true);  ?>lojas.png",
    'book_store': "<?php echo $this->Html->url('/img/pins/', true);  ?>lojas.png",
    'store': "<?php echo $this->Html->url('/img/pins/', true);  ?>lojas.png",
    'storage': "<?php echo $this->Html->url('/img/pins/', true);  ?>lojas.png",
    'grocery_or_supermarket': "<?php echo $this->Html->url('/img/pins/', true);  ?>mercado.png",
    'clothing_store': "<?php echo $this->Html->url('/img/pins/', true);  ?>lojas.png",
    'car_dealer': "<?php echo $this->Html->url('/img/pins/', true);  ?>lojas.png",
    'pet_store': "<?php echo $this->Html->url('/img/pins/', true);  ?>lojas.png",
    'florist': "<?php echo $this->Html->url('/img/pins/', true);  ?>lojas.png",
    'bicycle_store': "<?php echo $this->Html->url('/img/pins/', true);  ?>lojas.png",
    'electronics_store': "<?php echo $this->Html->url('/img/pins/', true);  ?>lojas.png",
    'restaurant': "<?php echo $this->Html->url('/img/pins/', true);  ?>comida.png",
    'food': "<?php echo $this->Html->url('/img/pins/', true);  ?>comida.png",
    'hospital': "<?php echo $this->Html->url('/img/pins/', true);  ?>saude.png",
    'dentist': "<?php echo $this->Html->url('/img/pins/', true);  ?>saude.png",
    'doctor': "<?php echo $this->Html->url('/img/pins/', true);  ?>saude.png",
    'pharmacy': "<?php echo $this->Html->url('/img/pins/', true);  ?>saude.png",
    'museum': '<?php echo $this->Html->url('/img/pins/', true);  ?>arte.png',
    'movie_theater': '<?php echo $this->Html->url('/img/pins/', true);  ?>lazer.png',
    'art_gallery': '<?php echo $this->Html->url('/img/pins/', true);  ?>lazer.png',
    'library': '<?php echo $this->Html->url('/img/pins/', true);  ?>lazer.png',
    'bar': '<?php echo $this->Html->url('/img/pins/', true);  ?>comida.png',
    'home_goods_store' : '<?php echo $this->Html->url('/img/pins/', true);  ?>comida.png',
    'book_store' : '<?php echo $this->Html->url('/img/pins/', true);  ?>comida.png',
    'restaurant': '<?php echo $this->Html->url('/img/pins/', true);  ?>comida.png',
    'night_club': '<?php echo $this->Html->url('/img/pins/', true);  ?>lazer.png',
    'park': '<?php echo $this->Html->url('/img/pins/', true);  ?>praca.png',
    'campground': '<?php echo $this->Html->url('/img/pins/', true);  ?>praca.png',
    'university': '<?php echo $this->Html->url('/img/pins/', true);  ?>praca.png'
  }

      function initialize() {

          var centerMap = new google.maps.LatLng(<?php echo $empreendimento['Empreendimento']['latitude']; ?>, <?php echo $empreendimento['Empreendimento']['longitude']; ?>); /*PONTO CENTRAL*/

          var myOptions = {
              zoom: 16,
              center: centerMap,
              scrollwheel:false,
              mapTypeId: google.maps.MapTypeId.ROADMAP,
              disableDoubleClickZoom: true,
              streetViewControl: false,
              navigationControl: true,
              navigationControlOptions: {     
                mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'grancorp'] 
              }
          }

          map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);



           var request = {
            location: centerMap,
            radius: '700',
            types: ['restaurant','hospital','park', 'museum','pharmacy' ,'shopping_mall','movie_theater','museum','library','night_club','food']
          };
     
          service = new google.maps.places.PlacesService(map);
          service.nearbySearch(request, callback);
          setMarkers(map, sites);
          infowindow = new google.maps.InfoWindow({
              content: "loading..."
          });
      }
      var sites = [

        ['<?php echo $empreendimento["Empreendimento"]["nome"]; ?>', <?php echo $empreendimento['Empreendimento']['latitude']; ?>, <?php echo $empreendimento['Empreendimento']['longitude']; ?>, 4, 
        '<p style="padding:0;text-align:center; color:#cd2a1f; font-size:12px; text-transform: uppercase; height:40px; "><?php echo $empreendimento["Empreendimento"]["nome"]; ?></p>', '<?php echo $this->Html->url("/img/pin.png", true); ?>']
        
          
      ];
      function setMarkers(map, markers) {
          for (var i = 0; i < markers.length; i++) {
              var sites = markers[i];
              var siteLatLng = new google.maps.LatLng(sites[1], sites[2]);
              var marker = new google.maps.Marker({
                  position: siteLatLng,
                  map: map,
                  title: sites[0],
                  zIndex: sites[3],
                  icon: sites[5],
                  html: sites[4]
              });

              var contentString = "Some content";

            
          google.maps.event.addListener(marker, 'click', (function(marker, i) {

            return function() {
              var marcador = markers[i];  
              var latMarcadorClicado = marcador[1];
              var lonMarcadorClicado = marcador[2];
              var pontoLatLng = new google.maps.LatLng(latMarcadorClicado , lonMarcadorClicado);
              map.panTo(pontoLatLng);
                    infowindow.setContent(this.html);
                    infowindow.open(map, this);
            }
            })(marker, i));   
          
          }
      


      }

  function callback(results, status) {
    
    if (status == google.maps.places.PlacesServiceStatus.OK) {
      for (var i = 0; i < results.length; i++) {
        var place = results[i];
        createMarker(results[i]);
      }
    }
  }            

  function createMarker(place) {
    var placeLoc = place.geometry.location;

    var icone = "<?php echo $this->Html->url('/img/pins/', true);  ?>lojas.png";
    if(icones[place.types[0]] != undefined)
      icone = icones[place.types[0]];

    var marker = new google.maps.Marker({
      map: map,
      position: place.geometry.location,
      icon: icone,
    });

    google.maps.event.addListener(marker, 'click', function() {
      infowindow.setContent(place.name);
      infowindow.open(map, this);
    });
  }
</script>
          
          <!-- fim do mapa -->
          <div id="map-canvas">
          </div>
          <?php echo $this->Html->image('legenda.png'); ?>
        </div>

        <div class="gallery">
          <h2 class="gallery-name">
            galeria de imagens
          </h2>

          <div id="gallery-container">
            <div id="gallery">
            <ul class="galeria-thumbs">
                <?php foreach($empreendimento['Imagem'] as $imagem){ ?>

                  <li class="colorbox-image" data-transition="fade" data-link="<?php echo $this->Html->url('/files/imagem/arquivo/'.$imagem['id'].'/wide_'.$imagem['arquivo']) ?>">
                    <img width="840" height="390" src="<?php echo $this->Html->url('/files/imagem/arquivo/'.$imagem['id'].'/wide_'.$imagem['arquivo']) ?>">

                    <div class="caption large_text sfl tp-caption start gallery-description"  data-x="-4" data-y="334" data-speed="300" data-start="600"></div>

                      <div class="caption large_text sfl tp-caption start gallery-text"  data-x="20" data-y="347" data-speed="300" data-start="1000"><?php echo $imagem['titulo'] ?></div>
                  </li>

                <?php } ?>

            </ul>
          </div>
          </div>
          <article class="useful-links" style="padding-left:70px;">
                  <div id="negocie">
                    <p class="negocie-title">
                      Negocie <br>seu terreno
                    </p>
                    <a href="<?php echo $this->Html->url('/negocie') ?>" class="negocie-link">
                      Saiba mais
                    </a>
                  </div>

                  <div id="newsletter">
                    <p class="newsletter-title">
                      Receba nossa <br>newsletter <br> por e-mail
                      <form onsubmit="enviaContato(); return false;">
                        <input id="emailContato"  class="newsletter-input" type="text" placeholder="digite seu e-mail"/>
                        <input type="submit" value="" class="newsletter-submit">
                      </form>
                  </div>
             </div>

                </article>
        </div>

        
      </section>  


  </section>


</div>