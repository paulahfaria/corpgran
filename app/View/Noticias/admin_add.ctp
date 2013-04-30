<div class="noticias form">
<?php echo $this->Form->create('Noticia', array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Cadastrar Noticia'); ?></legend>
	<?php
		echo $this->Form->input('titulo');
		echo $this->Form->input('conteudo', array('id'=>'conteudo','class'=>'ckeditor'));
		echo $this->Form->file('imagem');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar Noticias'), array('action' => 'index')); ?></li>
	</ul>
</div>
