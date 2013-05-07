          <div id="interna-content">
            
            <?php echo $this->Element('filtro_interna'); ?>

            <section id="interna-estatica">

             <div class="noticia">
                <h3><?php echo $noticia['Noticia']['titulo'] ?></h3>
              <br>

                <?php if($noticia['Noticia']['imagem'] != ''){ ?>

                    <div class="image">

                      <img src="<?php echo $this->Html->url('/files/noticia/imagem/'.$noticia['Noticia']['id'].'/normal_'.$noticia['Noticia']['imagem'] ); ?> ">
                   
                    </div>

               <br>
            
                <?php } ?>

      

              <div class="conteudo-noticia">

                <p class="description">
                  <?php echo $noticia['Noticia']['conteudo']; ?>
                </p>

              </div>
             </div>

              <br>
              <br>
              <br>
              <br>

            </section>

            <aside class="sidebar">

              <section id="search">
                <input type="text" name="" id="" class="search-input">
              </section>

              <section id="simular-financiamento">
                <?php echo $this->Html->image('caixa-economica.png'); ?>
                <a href="#" id="simulacao-caixa">
                  <span>Simule</span>
                  seu financiamento
                </a>
              </section>

                                <div id="vendas">
                    <p class="vendas-title">
                      Vendas
                    </p>
                    <p class="vendas-description">
                      Entre em contato conosco
                      e saiba mais sobre nossos
                      empreendimentos
                    </p>
                    <p class="vendas-telefone">
                      (31) 3354 7899
                    </p>
                  </div>


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
            </aside>
          </div>