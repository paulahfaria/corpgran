<div id="interna-content">

	<?php echo $this->Element('filtro_interna'); ?>

            <section id="interna-estatica">

            	<h2>Trabalhe Conosco</h2>

            	<br>
            	<br>

            	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            	<br>
            	<br>
            	<br>

            	<h3>Vagas</h3>


				<div class="curriculos form">


				<?php $c = 1; foreach($vagas as $vaga){ ?>

				<div class="vaga-item">
					<h4><?php echo $vaga['Vaga']['nome']; ?> </h4>

				<p><?php echo $vaga['Vaga']['descricao']; ?></p>
				<br>

				<?php echo $this->Form->create('Curriculo', array('class'=>'form-padrao', 'type' => 'file','url' =>'/curriculos/trabalhe_conosco/'.$c)); ?>
					<?php
						echo $this->Form->input($c.'.nome', array('label' => '', 'placeholder' => 'Nome'));
						echo $this->Form->input($c.'.email', array('label' => '', 'placeholder' => 'E-mail'));
						echo $this->Form->hidden($c.'.vaga_id', array('value' =>$vaga['Vaga']['id']));
						echo $this->Form->file($c.'.arquivo');
					?>
				<?php echo $this->Form->end(__('Enviar')); ?>
				</div>

				<?php $c++; } ?>



				</div>

				<br><br>

				<h3>Cadastre seu currículo</h3>

				<br>

				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>

				<br>

				<?php echo $this->Form->create('Curriculo', array('type' => 'file', 'class'=>'form-padrao')); ?>

					<?php
						echo $this->Form->input('0.nome', array('label' => '', 'placeholder' => 'Nome'));
						echo $this->Form->input('0.email', array('label' => '', 'placeholder' => 'E-mail'));
						echo $this->Form->input('0.telefone', array('label' => '', 'placeholder' => 'Telefone'));
						echo $this->Form->select('0.area_id', $areas,  array('empty' => 'Selecione uma área'));
						echo '<br>';
						echo $this->Form->file('0.arquivo');
					?>
				<?php echo $this->Form->end(__('Enviar')); ?>
				</div>
				<section>
				</div>