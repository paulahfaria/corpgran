<div id="home-content">
    <section class="list-obras">
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
      <div>
        <br /><br /><br /><br /><br /><br /><br />
        <img src="<?php echo $this->Html->url('/files/imagem/arquivo/'.$empreendimento['ImagemDestaque']['id'].'/normal_'.$empreendimento['ImagemDestaque']['arquivo']) ?> ">
        <h1><?php echo $empreendimento['Empreendimento']['nome'] ?></h1>
        <p><?php echo $empreendimento['Quarto']['nome'] ?></p>
        <p><?php echo $empreendimento['Etapa']['nome'] ?></p>
        <p><?php echo $empreendimento['Bairro']['nome'] ?></p>
        <p><?php echo $empreendimento['Empreendimento']['descricao'] ?></p>
        <ul class="atributos">

            <?php foreach($empreendimento['Empreendimento']['atributos'] as $atributo){ ?>

              <li><?php echo $atributo; ?> </li>

            <?php  } ?>


        </ul>    
      </div>  
  </section>


</div>