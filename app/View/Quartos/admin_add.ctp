<div class="quartos form">
<?php echo $this->Form->create('Quarto'); ?>
	<fieldset>
		<legend><?php echo __('Add Quarto'); ?></legend>
	<?php
		echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Quartos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Empreendimentos'), array('controller' => 'empreendimentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empreendimento'), array('controller' => 'empreendimentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
