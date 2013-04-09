          <div id="interna-content">
           
            <?php echo $this->Element('filtro_interna'); ?>

            <section id="interna-estatica">
              <h2>Contato</h2>

              <br><br><br>

              <?php echo $this->Form->create('Contato', array('class'=>'form-padrao')); ?>
              <?php
                echo $this->Form->input('nome', array('label' => '', 'placeholder' => 'Nome'));
                echo $this->Form->input('email', array('label' => '', 'placeholder' => 'E-mail', 'class'=>'mini'));
                echo $this->Form->input('telefone', array('label' => '', 'placeholder' => 'Telefone', 'class'=>'mini'));
                echo $this->Form->input('assunto', array('label' => '', 'placeholder' => 'Assunto'));           
                echo $this->Form->select('tipo_contato', $tipoContato,  array('empty' => false));
                echo $this->Form->textarea('mensagem');
              ?>
            <?php echo $this->Form->end(__('Enviar')); ?>

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