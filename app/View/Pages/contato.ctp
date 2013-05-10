          <div id="interna-content">
           
            <?php echo $this->Element('filtro_interna'); ?>

            <section id="interna-estatica">

               <?php echo $this->Session->flash();?>
              
              <h2>Contato</h2>

              <br><br><br>

              <?php echo $this->Form->create('Contato', array('class'=>'form-padrao')); ?>
              <?php
                echo $this->Form->input('nome', array('label' => '', 'placeholder' => 'Nome'));
                echo $this->Form->input('email', array('label' => '', 'placeholder' => 'E-mail', 'class'=>'mini'));
                echo $this->Form->input('telefone', array('label' => '', 'placeholder' => 'Telefone', 'class'=>'mini'));
                echo $this->Form->input('assunto', array('label' => '', 'placeholder' => 'Assunto'));           
                echo $this->Form->select('tipo_contato', $tipoContato,  array('empty' => false));
                echo $this->Form->textarea('mensagem');
              ?>
            <?php echo $this->Form->end(__('Enviar')); ?>

            </section>

 
          <?php echo $this->element('sidebar_interna') ?>

          </div>