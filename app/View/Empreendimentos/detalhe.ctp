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
        </div>

        <div class="location">
          <h2 class="location-name">
            Localização
          </h2>
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
                      <input class="newsletter-input" type="text" placeholder="digite seu e-mail"/>
                  </div>

                </article>
        </div>

        
      </section>  


  </section>


</div>