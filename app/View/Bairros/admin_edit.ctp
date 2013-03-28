<div class="bairros form">
<?php echo $this->Form->create('Bairro'); ?>
	<fieldset>
		<legend><?php echo __('Edit Bairro'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Bairro.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Bairro.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Bairros'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Empreendimentos'), array('controller' => 'empreendimentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empreendimento'), array('controller' => 'empreendimentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
