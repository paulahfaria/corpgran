<div class="terrenos form">
<?php echo $this->Form->create('Terreno'); ?>
	<fieldset>
		<legend><?php echo __('Add Terreno'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('email');
		echo $this->Form->input('telefone');
		echo $this->Form->input('profissao');
		echo $this->Form->input('cidade');
		echo $this->Form->input('estado');
		echo $this->Form->input('terreno_endereco');
		echo $this->Form->input('terreno_bairro');
		echo $this->Form->input('terreno_cidade');
		echo $this->Form->input('terreno_estado');
		echo $this->Form->input('area');
		echo $this->Form->input('zoneamento');
		echo $this->Form->input('topografia');
		echo $this->Form->input('valor');
		echo $this->Form->input('imagem');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Terrenos'), array('action' => 'index')); ?></li>
	</ul>
</div>
