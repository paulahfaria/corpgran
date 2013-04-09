          <div id="interna-content">
            
            <?php echo $this->Element('filtro_interna'); ?>

            <section id="interna-estatica">
              <h2>Notícias</h2>
              <br /><br /><br />

              <?php foreach ($noticias as $noticia) { ?>

                <div class="noticia">
                   <h3><?php echo $noticia['Noticia']['titulo'] ?></h3>
                <b><?php echo date('d-m-Y', strtotime($noticia['Noticia']['created'])); ?></b>
                <p>
                    <?php echo $noticia['Noticia']['conteudo'] ?>
                </p>

                <a href="<?php echo $this->Html->url('/noticias/detalhe/'.$noticia['Noticia']['id']) ?>">Leia mais</a>
                <br /><br /><br />
                </div>

              <?php } ?>

 


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