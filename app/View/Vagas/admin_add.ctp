<div class="vagas form">
<?php echo $this->Form->create('Vaga'); ?>
	<fieldset>
		<legend><?php echo __('Cadastrar Vaga'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Vagas'), array('action' => 'index')); ?></li>
	</ul>
</div>
