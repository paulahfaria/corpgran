<div class="bairros form">
<?php echo $this->Form->create('Bairro'); ?>
	<fieldset>
		<legend><?php echo __('Editar Bairro'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar Empreendimentos'), array('controller' => 'empreendimentos', 'action' => 'index')); ?> </li>
	</ul>
</div>
