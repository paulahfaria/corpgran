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
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Empreendimentos'), array('action' => 'index')); ?></li>
	</ul>
</div>
