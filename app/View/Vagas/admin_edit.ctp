<div class="vagas form">
<?php echo $this->Form->create('Vaga'); ?>
	<fieldset>
		<legend><?php echo __('Editar Vaga'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Vaga.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Vaga.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Vagas'), array('action' => 'index')); ?></li>
	</ul>
</div>
