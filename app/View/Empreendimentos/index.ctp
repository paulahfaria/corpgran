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
      </section>  
      <div id="works">

        <?php foreach ($empreendimentos as $empreendimento) { ?>
                     
        <!-- item empreendimento -->
        <div name="<?php echo $empreendimento['Bairro']['slug'].'-'.$empreendimento['Empreendimento']['slug']; ?>" class="item etapa-<?php echo $empreendimento['Etapa']['slug']; ?> bairro-<?php echo $empreendimento['Bairro']['slug']; ?>">
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

</div>

