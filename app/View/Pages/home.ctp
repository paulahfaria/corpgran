
 

  
    <section id="banner">
                <div class="banner-container">
                    <div class="banner">
                        <ul>

                            <?php foreach ($destaques as $destaque) { ?>
                            <li data-transition="fade">

                              <img src="<?php echo $this->Html->url('/files/destaque/arquivo/'.$destaque['Destaque']['id'].'/'.$destaque['Destaque']['arquivo']); ?>" />


                              <div class="banner-bg-back tp-caption sft" data-easing="easeOutExpo" data-start="300" data-speed="500" data-y="0" data-x="0"></div>

                              <div class="banner-bg-front tp-caption sft" data-easing="easeOutExpo" data-start="500" data-speed="500" data-y="0" data-x="0"></div>

                              <div data-easing="easeOutExpo" data-start="1000" data-speed="800" data-y="110" data-x="0" class="sft tp-caption caption-empreendimento">
                                <?php echo $destaque['Destaque']['titulo']  ?>          
                               </div>

                               <div data-easing="easeOutExpo" data-start="1500" data-speed="500" data-y="230" data-x="0" class="sft tp-caption caption-empreendimento">
                                 <a href="<?php echo $destaque['Destaque']['link']  ?>" <?php echo($destaque['Destaque']['target']==1)?'target="_blank"':''; ?> class="link-banner">Conheça</a>
                               </div>

                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </section>
    <div style="width:100%">
             <div id="home-content">
              <section class="list-obras">
                <nav class="filter-nav">
                  <a href="#" class="filter-type-link etapa-active" type-filter="obras">Busque por estágio da obra</a>
                  <a href="#" class="filter-type-link bairro-active" type-filter="bairro">Busque por bairro</a>
                    <ul id="filter-obras" class="filter">

                        <li><a href="#" class="filter-link active" data-filter="*">Todas Etapas</a></li>

                        <?php foreach ($etapas as $etapa) { ?>

                          <li><a href="#" class="filter-link active" data-filter="etapa-<?php echo $etapa['Etapa']['slug']; ?>"><?php echo $etapa['Etapa']['nome']; ?></a></li>
                        
                        <?php } ?>
                    
                    </ul>
                    <ul id="filter-bairro" class="filter">
                        <li> <a href="#" class="filter-link active" data-filter="*">Todos Bairros</a></li>

                        <?php foreach ($bairros as $bairro) { ?>

                          <li><a href="#" class="filter-link" data-filter="bairro-<?php echo $bairro['Bairro']['slug'] ?>"><?php echo $bairro['Bairro']['nome'] ?></a></li>
                        
                        <?php } ?>
                    </ul>
                </nav>
                <div id="works">

                  <?php foreach ($empreendimentos as $empreendimento) { ?>
                               
                  <!-- item empreendimento -->
                  <div class="item etapa-<?php echo $empreendimento['Etapa']['slug']; ?> bairro-<?php echo $empreendimento['Bairro']['slug']; ?>">
                      <div class="work-image">

                    <a href="<?php echo $this->Html->url('/empreendimentos/detalhe/'.$empreendimento['Empreendimento']['slug']) ?>">
                       <img src="<?php echo $this->Html->url('/files/imagem/arquivo/'.$empreendimento['ImagemDestaque']['id'].'/thumb_'.$empreendimento['ImagemDestaque']['arquivo']) ?>">
                    </a>
                      <!-- Selo. Se trocar a classe troca a cor -->
                      <div class="work-stamp <?php echo $empreendimento['Etapa']['slug']; ?>"><?php echo $empreendimento['Etapa']['nome']; ?></div>
                    </div>
                    <p class="work-name">
                      <?php echo $empreendimento['Empreendimento']['nome']; ?>
                    </p>
                    <p class="work-description">
                      <?php echo $empreendimento['Quarto']['nome']; ?> <br>
                      Bairro <?php echo $empreendimento['Bairro']['nome']; ?>
                    </p>
                   
                  </div>
                  <!-- fim do item -->

                  <?php } ?>

                </div>
                <article class="useful-links">
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

                  <div id="vendas">
                    <p class="vendas-title">
                      Vendas
                    </p>
                    <p class="vendas-telefone">
                      (31) 3772 1539
                    </p>
                  </div>
                </article>
            </section>

          <aside class="sidebar">
            <form onSubmit="buscaEmpreendimentos();return false;">
             <input type="text" name="busca" placeholder="Buscar" class="search-input">
             </form>
              <section id="simular-financiamento">
                <?php echo $this->Html->image('caixa-economica.png'); ?>
                <a href="http://www8.caixa.gov.br/siopiinternet/simulaOperacaoInternet.do?method=inicializarCasoUso" id="simulacao-caixa" target="_blank">
                  <span>Simule</span>
                  seu financiamento
                </a>
              </section>
          </aside>
          </div>
    </div>