<div id="home-content">

      <h2>Meus empreendimentos</h2>
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

