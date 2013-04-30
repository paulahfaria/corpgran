<div class="noticias form">
<?php echo $this->Form->create('Noticia', array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Editar Noticia'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('conteudo', array('id'=>'conteudo','class'=>'ckeditor'));
		echo $this->Form->file('imagem');
	?>
	
	<?php if($this->request->data['Noticia']['imagem'] != ''){ ?>

		<label>Imagem Atual</label><br/>
		<img src="<?php echo $this->Html->url('/files/noticia/imagem/'.$this->request->data['Noticia']['id'].'/thumb_'.$this->request->data['Noticia']['imagem'] ); ?> ">

	<?php } ?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Noticia.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Noticia.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Noticias'), array('action' => 'index')); ?></li>
	</ul>
</div>
