<div class="empreendimentos form">
<?php echo $this->Form->create('Empreendimento'); ?>
	<fieldset>
		<legend><?php echo __('Add Empreendimento'); ?></legend>
	<?php
		echo $this->Form->input('bairro_id');
		echo $this->Form->input('quarto_id');
		echo $this->Form->input('etapa_id');
		echo $this->Form->input('nome');
		echo $this->Form->input('descricao');
		echo $this->Form->input('atributos');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Empreendimentos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Bairros'), array('controller' => 'bairros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bairro'), array('controller' => 'bairros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quartos'), array('controller' => 'quartos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quarto'), array('controller' => 'quartos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Etapas'), array('controller' => 'etapas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etapa'), array('controller' => 'etapas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Favoritos'), array('controller' => 'favoritos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Favorito'), array('controller' => 'favoritos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Imagens'), array('controller' => 'imagens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imagen'), array('controller' => 'imagens', 'action' => 'add')); ?> </li>
	</ul>
</div>
