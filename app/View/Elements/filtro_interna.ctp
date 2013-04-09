 <nav class="filter-nav">
              <a href="#" class="filter-type-link etapa-active" type-filter="obras">Estágio da obra</a>
              <a href="#" class="filter-type-link bairro-active" type-filter="bairro">Bairro</a>
              <ul id="filter-obras" class="filter">

                <li><a href="#" class="filter-link active" data-filter="*">Todas Etapas</a></li>

                <?php foreach ($etapas as $etapa) { ?>

                <li><a href="#" class="filter-link active" data-filter="<?php echo $etapa['Etapa']['slug']; ?>"><?php echo $etapa['Etapa']['nome']; ?></a></li>

                <?php } ?>

              </ul>
              <ul id="filter-bairro" class="filter">
                <li> <a href="#" class="filter-link active" data-filter="*">Todos Bairros</a></li>

                <?php foreach ($bairros as $bairro) { ?>

                <li><a href="#" class="filter-link" data-filter="<?php echo $bairro['Bairro']['slug'] ?>"><?php echo $bairro['Bairro']['nome'] ?></a></li>

                <?php } ?>
              </ul>
              <a href="javascript:filtrarEmpreendimentos();" id="buscar-empreendimentos">Buscar</a>
            </nav>