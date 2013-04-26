          <div id="interna-content">
            
            <?php echo $this->Element('filtro_interna'); ?>

            <section id="interna-estatica">
              <h2>Negocie seu terreno</h2>


              <br>
              <br>

              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>

              <br>
              <br>


              <?php echo $this->Form->create('Contato', array('class'=>'form-padrao')); ?>
              <?php
                echo $this->Form->input('nome', array('label' => '', 'placeholder' => 'Nome'));
                echo $this->Form->input('email', array('label' => '', 'placeholder' => 'E-mail', 'class'=>'mini'));
                echo $this->Form->input('telefone', array('label' => '', 'placeholder' => 'Telefone', 'class'=>'mini'));
                echo $this->Form->input('assunto', array('label' => '', 'placeholder' => 'Assunto'));           
                echo $this->Form->textarea('mensagem', array('placeholder' => 'Mensagem'));
              ?>
            <?php echo $this->Form->end(__('Enviar')); ?>
            </section>

            <aside class="sidebar">

              <section id="search">
                <input type="text" name="" id="" class="search-input">
              </section>

              <section id="simular-financiamento">
                <?php echo $this->Html->image('caixa-economica.png'); ?>
                <a href="http://www8.caixa.gov.br/siopiinternet/simulaOperacaoInternet.do?method=inicializarCasoUso" id="simulacao-caixa" target="_blank">
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
                      (31) 3772 1539
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
                      Receba nossa <br>newsletter <br> por e-mail
                      <input class="newsletter-input" type="text" placeholder="digite seu e-mail"/>
                  </div>


                </article>
            </aside>
          </div>