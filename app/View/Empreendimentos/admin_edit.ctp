<div class="empreendimentos form">
<?php echo $this->Form->create('Empreendimento'); ?>
	<fieldset>
		<legend><?php echo __('Editar Empreendimento'); ?></legend>
	<?php
		echo $this->Form->input('id');
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
		echo $this->Form->input('status', array('label'=>'Status do empreendimento (Apenas o numero da %)'));
		echo $this->Form->input('info_adicional', array('type' => 'textarea' ,    'label'=>'Informação adicional restrita'));

		 ?>		
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $this->Form->value('Empreendimento.id')), null, __('Deseja realmente deletar # %s?', $this->Form->value('Empreendimento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Empreendimentos'), array('action' => 'index')); ?></li>
	</ul>
</div>
