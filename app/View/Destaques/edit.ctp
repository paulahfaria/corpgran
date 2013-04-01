<div class="destaques form">
<?php echo $this->Form->create('Destaque'); ?>
	<fieldset>
		<legend><?php echo __('Edit Destaque'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('arquivo');
		echo $this->Form->input('link');
		echo $this->Form->input('target');
		echo $this->Form->input('prioridade');
		echo $this->Form->input('ativo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Destaque.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Destaque.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Destaques'), array('action' => 'index')); ?></li>
	</ul>
</div>
