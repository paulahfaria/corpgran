          <div id="interna-content">
            <nav class="filter-nav">
              <a href="#" class="filter-type-link etapa-active" type-filter="obras">Estágio da obra</a>
              <a href="#" class="filter-type-link bairro-active" type-filter="bairro">Bairro</a>
              <ul id="filter-obras" class="filter">

                <li><a href="#" class="filter-link active" data-filter="*">Todas Etapas</a></li>

                <?php foreach ($etapas as $etapa) { ?>

                <li><a href="#" class="filter-link active" data-filter=".etapa-<?php echo $etapa['Etapa']['slug']; ?>"><?php echo $etapa['Etapa']['nome']; ?></a></li>

                <?php } ?>

              </ul>
              <ul id="filter-bairro" class="filter">
                <li> <a href="#" class="filter-link active" data-filter="*">Todos Bairros</a></li>

                <?php foreach ($bairros as $bairro) { ?>

                <li><a href="#" class="filter-link" data-filter=".bairro-<?php echo $bairro['Bairro']['slug'] ?>"><?php echo $bairro['Bairro']['nome'] ?></a></li>

                <?php } ?>
              </ul>
            </nav>

            <section id="interna-estatica">
              <h2>Quem somos </h2>

              <br>
              <br>
              <br>
              <br>

              <?php echo $this->Html->image('quem-somos.jpg'); ?>

              <br>
              <br>
              <br>
              <br>

              <h3>Como surgiu</h3>

              <br>
              <br>

              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>

              <br>
              <br>
              <br>
              <br>

              <h3>Missão</h3>

              <br>
              <br>

              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
              </p>

              <br>
              <br>
              <br>
              <br>

              <h3>Visão</h3>

              <br>
              <br>


              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>

              <br>
              <br>
              <br>
              <br>

              <h3>valores</h3>

              <br>
              <br>

              <ul>
                <li><span>Lorem ipsum dolor sit amet</span></li>
                <li><span>Consectetur adipisicing elit</span></li>
                <li><span>Sed do eiusmod tempor</span></li>
                <li><span>Incididunt ut labore et dolore</span></li>
                <li><span>Magna aliqua</span></li>
                <li><span>Ut enim ad minim veniam</span></li>
              </ul>
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