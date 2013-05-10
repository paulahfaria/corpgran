<div class="empreendimentos form">
<?php echo $this->Form->create('Empreendimento'); ?>
	<fieldset>
		<legend><?php echo __('Cadastrar Empreendimento'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('bairro_id');
		echo $this->Form->input('quarto_id');
		echo $this->Form->input('etapa_id');
		echo $this->Form->input('descricao');
		echo $this->Form->input('atributos');
		echo $this->Form->input('latitude');
		echo $this->Form->input('longitude');				
		?>
		<p>Para localizar a latitude e longitude clique <a href="http://itouchmap.com/latlong.html" target="_blank">aqui</a></p>
		<?php 
			echo $this->Form->input('muro', array('label'=>'Muro (Apenas o numero da %)'));
			echo $this->Form->input('fundacao', array('label'=>'Fundação'));
			echo $this->Form->input('alvenaria', array('label'=>'Alvenaria'));
			echo $this->Form->input('estrutura', array('label'=>'Estrutura'));
			echo $this->Form->input('cobertura', array('label'=>'Cobertura'));
			echo $this->Form->input('esquadrias', array('label'=>'Esquadrias'));
			echo $this->Form->input('instalacoes', array('label'=>'Instalações'));
			echo $this->Form->input('revestimento', array('label'=>'Revestimento'));
			echo $this->Form->input('pavimentacao', array('label'=>'Pavimentação'));
			echo $this->Form->input('pintura', array('label'=>'Pintura'));

		 ?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Empreendimentos'), array('action' => 'index')); ?></li>
	</ul>
</div>
