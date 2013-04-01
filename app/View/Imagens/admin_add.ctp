<div class="imagens form">
<?php echo $this->Form->create('Imagem', array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Cadastrar imagens'); ?></legend>
	<?php
		echo $this->Form->hidden('empreendimento_id', array('value'=> $empreendimento_id));
		echo $this->Form->input('titulo');
		echo $this->Form->input('arquivo.', array('type' => 'file','multiple'));
		//echo $this->Form->select('destaque', array(0 => 'Não', 1 => 'Sim'), array('empty'=> false));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
