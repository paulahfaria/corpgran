          <div id="interna-content">
            
            <?php echo $this->Element('filtro_interna'); ?>

            <section id="interna-estatica">

             <div class="noticia">
                <h3><?php echo $noticia['Noticia']['titulo'] ?></h3>
              <br>

                <?php if($noticia['Noticia']['imagem'] != ''){ ?>

                    <div class="image">

                      <img src="<?php echo $this->Html->url('/files/noticia/imagem/'.$noticia['Noticia']['id'].'/normal_'.$noticia['Noticia']['imagem'] ); ?> ">
                   
                    </div>

               <br>
            
                <?php } ?>

      

              <div class="conteudo-noticia">

                <p class="description">
                  <?php echo $noticia['Noticia']['conteudo']; ?>
                </p>

              </div>
             </div>

              <br>
              <br>
              <br>
              <br>

            </section>

           <?php echo $this->element('sidebar_interna'); ?>
</div>
