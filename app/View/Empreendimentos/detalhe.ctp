<div id="barra-empreendimentos">
  <div id="vendemos">
    
  </div>
  <div id="simulamos">
    
  </div>
  <div id="ligamos">
    
  </div>
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
                <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2FGranCorp%3Ffref%3Dts&amp;send=false&amp;layout=button_count&amp;width=300&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=121280808059399" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:21px;" allowTransparency="true"></iframe>
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

            <div id="bg-barra">
              <div id="barra" data-progress="<?php echo $empreendimento['Empreendimento']['status']; ?>">
                <p>
                  <span class="valor-progresso">
                    
                  </span>
                  % concluída
                </p>
              </div>
            </div>
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

                var map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);


                setMarkers(map, sites);
                infowindow = new google.maps.InfoWindow({
                    content: "loading..."
                });
            }
            var sites = [

              ['NOME DO EMPREENDIMENTO', -3.096219, -60.046892, 4, 
              '<p style="padding:0;text-align:center; color:#cd2a1f; font-size:12px; text-transform: uppercase;">\
              <strong>Hotel Go Inn Cambuí</strong>\
              </p>', 'images/pin/pin.png']
              
                
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


          </script>
          
          <!-- fim do mapa -->
          <div id="map-canvas">
          </div>
        </div>

        <div class="gallery">
          <h2 class="gallery-name">
            galeria de imagens
          </h2>

          <div id="gallery-container">
            <div id="gallery">
            <ul class="galeria-thumbs">
                <?php foreach($empreendimento['Imagem'] as $imagem){ ?>

                  <li data-transition="fade">
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
                    <a href="#" class="negocie-link">
                      Saiba mais
                    </a>
                  </div>

                  <div id="newsletter">
                    <p class="newsletter-title">
                      Receba nossas <br>novidades por e-mail</p>
                      <form onsubmit="enviaContato(); return false;">
                         <input type="text" name="" id="emailContato" class="search-input">
                    </form>
             </div>

                </article>
        </div>

        
      </section>  


  </section>


</div>