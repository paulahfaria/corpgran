<div id="interna-content">

	<?php echo $this->Element('filtro_interna'); ?>

            <section id="interna-estatica">
            	
           		 <?php echo $this->Session->flash();?>

            	<h2>Carreiras</h2>

            	<br>
            	<br>

            	<p>Quer trabalhar em uma empresa que prioriza a meritocracia e o crescimento profissional e oferece desafios diários?<br>
            	<br>

				Veja as vagas em aberto:</p>

            	<br>
            	<br>
            	<br>

            	<h3>Vagas</h3>


				<div class="curriculos form">


				<?php $c = 1; foreach($vagas as $vaga){ ?>

				<div class="vaga-item">
					<h4><?php echo $vaga['Vaga']['nome']; ?> </h4>

				<p><?php echo nl2br($vaga['Vaga']['descricao']); ?></p>
				<br>

				<?php echo $this->Form->create('Curriculo', array('class'=>'form-padrao', 'type' => 'file','url' =>'/curriculos/carreiras/'.$c)); ?>
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
					Não identificou nenhuma vaga adequada ao seu perfil profissional? Cadastre seu currículo! <br>Entraremos em contato assim que identificarmos uma oportunidade
				</p>

				<br>

				<?php echo $this->Form->create('Curriculo', array('type' => 'file', 'class'=>'form-padrao','url' =>'/curriculos/carreiras/0')); ?>

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