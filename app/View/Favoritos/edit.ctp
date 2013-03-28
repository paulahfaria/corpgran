<div class="favoritos form">
<?php echo $this->Form->create('Favorito'); ?>
	<fieldset>
		<legend><?php echo __('Edit Favorito'); ?></legend>
	<?php
		echo $this->Form->input('empreendimento_id');
		echo $this->Form->input('usuario_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Favorito.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Favorito.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Favoritos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Empreendimentos'), array('controller' => 'empreendimentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empreendimento'), array('controller' => 'empreendimentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
