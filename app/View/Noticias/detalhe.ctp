          <div id="interna-content">
            
            <?php echo $this->Element('filtro_interna'); ?>

            <section id="interna-estatica">

              <h2><?php echo $noticia['Noticia']['titulo'] ?></h2>
              <br>

                <?php if($noticia['Noticia']['imagem'] != ''){ ?>

                    <div class="image">

                      <img src="<?php echo $this->Html->url('/files/noticia/imagem/'.$noticia['Noticia']['id'].'/normal_'.$noticia['Noticia']['imagem'] ); ?> ">
                   
                    </div>

               <br>
            
                <?php } ?>

      

              <div class="conteudo-noticia">

                <?php echo $noticia['Noticia']['conteudo']; ?>

              </div>

              <br>
              <br>
              <br>
              <br>

            </section>

           <?php echo $this->element('sidebar_interna'); ?>
</div>