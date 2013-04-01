<div class="bairros form">
<?php echo $this->Form->create('Bairro'); ?>
	<fieldset>
		<legend><?php echo __('Cadastrar Bairro'); ?></legend>
	<?php
		echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar Bairros'), array('action' => 'index')); ?></li>
	</ul>
</div>
