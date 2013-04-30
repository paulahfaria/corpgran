<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); ?>
	<fieldset>
		<legend><?php echo __('Editar Usuario'); ?></legend>
	<?php
		echo $this->Form->input('Usuario.id');
		echo $this->Form->input('Usuario.nome');
		echo $this->Form->input('Usuario.email');
		echo $this->Form->input('Usuario.password');
		echo $this->Form->input('Usuario.Empreendimento',array('selected'=>$empreendimentosSelected, 'label'=>'Selecione os empreendimentos', 'type'=>'select', 'multiple'=>true));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Usuario.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Usuario.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Usuarios'), array('action' => 'index')); ?></li>
	</ul>
</div>
