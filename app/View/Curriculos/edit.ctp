<div class="curriculos form">
<?php echo $this->Form->create('Curriculo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Curriculo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('email');
		echo $this->Form->input('telefone');
		echo $this->Form->input('arquivo');
		echo $this->Form->input('vaga_id');
		echo $this->Form->input('area_id');
		echo $this->Form->input('visualizado');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Curriculo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Curriculo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Curriculos'), array('action' => 'index')); ?></li>
	</ul>
</div>
