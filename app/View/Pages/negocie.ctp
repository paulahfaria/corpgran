          <div id="interna-content">
            
            <section id="interna-estatica">
              <h2>Negocie seu terreno</h2>


              <br>
              <br>

              <p>
                Cadastre o seu imóvel no nosso banco de terrenos preenchendo os campos abaixo. Agendaremos uma visita para avaliação do melhor negocio.
              </p>

              <br>
              <br>


              <?php echo $this->Form->create('Contato', array('class'=>'form-padrao')); ?>
              <h3>Dados do Proprietário</h3><br>
              <?php
                echo $this->Form->input('nome', array('label' => '', 'placeholder' => 'Nome'));
                echo $this->Form->input('email', array('label' => '', 'placeholder' => 'E-mail', 'class'=>'mini'));
                echo $this->Form->input('telefone', array('label' => '', 'placeholder' => 'Telefone', 'class'=>'mini'));
                echo $this->Form->input('profissao', array('label' => '', 'placeholder' => 'Profissão'));    
                echo $this->Form->input('cidade', array('label' => '', 'placeholder' => 'Cidade', 'class'=>'mini'));   
                echo $this->Form->input('estado', array('label' => '', 'placeholder' => 'Estado', 'class'=>'mini'));       

              ?>
               <br><br><h3>Dados do Terreno</h3><br>
              <?php
                echo $this->Form->input('terreno_endereco', array('label' => '', 'placeholder' => 'Endereço'));
                echo $this->Form->input('terreno_bairro', array('label' => '', 'placeholder' => 'Região – Bairro', 'class'=>'mini'));
                echo $this->Form->input('terreno_cidade', array('label' => '', 'placeholder' => 'Cidade', 'class'=>'mini'));  
                echo $this->Form->input('terreno_estado', array('label' => '', 'placeholder' => 'Estado', 'class'=>'mini')); 
                echo $this->Form->input('area', array('label' => '', 'placeholder' => 'Área do Terreno (m2)', 'class'=>'mini'));
                echo $this->Form->input('zoneamento', array('label' => '', 'placeholder' => 'Zoneamento'));    
                echo $this->Form->input('topografia', array('label' => '', 'placeholder' => 'Tipo de Topografia'));                   
                echo $this->Form->input('valor', array('label' => '', 'placeholder' => 'Expectativa de valor (m2) '));       
                echo $this->Form->label('Anexar foto'); echo '<br>';
                echo $this->Form->file('imagem');
              ?>        
     
            <?php echo $this->Form->end(__('Enviar')); ?>
            </section>

            <?php echo $this->element('sidebar_interna') ?>
  </div>