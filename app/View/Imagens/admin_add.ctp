<div class="imagens form">
<?php echo $this->Form->create('Imagem', array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Cadastrar imagens'); ?></legend>
	<?php
		echo $this->Form->hidden('empreendimento_id', array('value'=> $empreendimento_id));
		echo $this->Form->input('titulo');
		echo $this->Form->input('arquivo.', array('type' => 'file','multiple'));
		echo $this->Form->select('privado', array(0 => 'Público', 1 => 'Privado'), array('empty'=> false));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
