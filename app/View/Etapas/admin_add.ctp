<div class="etapas form">
<?php echo $this->Form->create('Etapa'); ?>
	<fieldset>
		<legend><?php echo __('Add Etapa'); ?></legend>
	<?php
		echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Etapas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Empreendimentos'), array('controller' => 'empreendimentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empreendimento'), array('controller' => 'empreendimentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
