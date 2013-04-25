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
<?php echo $this->Form->end(__('Salvar')); ?>
</div>