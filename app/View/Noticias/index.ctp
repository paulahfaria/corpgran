          <div id="interna-content">
            
            <?php echo $this->Element('filtro_interna'); ?>

            <section id="interna-estatica">
              <h2>Notícias</h2>
              <br />

              <?php foreach ($noticias as $noticia) { ?>

                <div class="noticia">

                   <h3><?php echo $noticia['Noticia']['titulo'] ?></h3>
                   <b class="news-date"><?php echo date('d-m-Y', strtotime($noticia['Noticia']['created'])); ?></b>
                <br>

                <?php if($noticia['Noticia']['imagem'] != ''){ ?>

                    <div class="image">

                      <img src="<?php echo $this->Html->url('/files/noticia/imagem/'.$noticia['Noticia']['id'].'/thumb_'.$noticia['Noticia']['imagem'] ); ?> ">
                   
                    </div>

                <?php } ?>

                <div class="description <?php echo($noticia['Noticia']['imagem'] != '')?'small':''; ?>    ">

                    <?php echo substr($noticia['Noticia']['conteudo'], 0 , 500); ?>...

                     <a href="<?php echo $this->Html->url('/noticias/detalhe/'.$noticia['Noticia']['id']) ?>" class="leia-mais">Leia mais</a>
 
                 </div>

                <br /><br /><br />
                </div>

              <?php } ?>

 


              <br>

            </section>

            <?php echo $this->element('sidebar_interna'); ?>
            
          </div>