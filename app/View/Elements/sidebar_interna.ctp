 <aside class="sidebar sidebar-interna">

      <section id="search">
             <input type="text" name="" class="search-input">
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

            <a href="<?php echo $this->Html->url('/negocie') ?>" class="negocie-link">
              Saiba mais
            </a>
          </div>

          <div id="newsletter">
            <p class="newsletter-title">
              Receba nossas <br>novidades por e-mail</p>
              <form onsubmit="enviaContato(); return false;">
              <input class="newsletter-input" id="emailContato"  type="text" placeholder="digite seu e-mail"/>
            </form>
          </div>


        </article>
    </aside>