<div class="noticias form">
<?php echo $this->Form->create('Noticia'); ?>
	<fieldset>
		<legend><?php echo __('Add Noticia'); ?></legend>
	<?php
		echo $this->Form->input('titulo');
		echo $this->Form->input('conteudo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Noticias'), array('action' => 'index')); ?></li>
	</ul>
</div>
