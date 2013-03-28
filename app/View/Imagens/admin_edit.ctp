<div class="imagens form">
<?php echo $this->Form->create('Imagem'); ?>
	<fieldset>
	<legend><?php echo __('Editar Imagens'); ?></legend>

	<?php for($c = 0; $c < count($empreendimento['Imagem']); $c++){  ?>

	<div class="edit_imagem">
		<img src="<?php echo $this->Html->url('/files/imagem/arquivo/'.$empreendimento['Imagem'][$c]['id'].'/thumb_'.$empreendimento['Imagem'][$c]['arquivo']); ?> ">
		<?php
			echo $this->Form->input($c.'.id', array('type'=>'hidden','value'=>$empreendimento['Imagem'][$c]['id']));
			echo $this->Form->input($c.'.empreendimento_id', array('type'=>'hidden','value'=>$empreendimento['Imagem'][$c]['empreendimento_id']));
			echo $this->Form->input($c.'.titulo',array('value'=>$empreendimento['Imagem'][$c]['titulo']));
			echo $this->Form->select($c.'.destaque', array(0 => 'Não', 1 => 'Sim'), array('empty'=> false,'default' => $empreendimento['Imagem'][$c]['destaque']));
		?>
		<a href="<?php echo $this->Html->url('/admin/imagens/delete/'.$empreendimento['Imagem'][$c]['id'].'/'.$empreendimento['Imagem'][$c]['empreendimento_id']) ?>">Deletar</a>

	</div>

	<?php }  ?>

	</fieldset>
<?php echo $this->Form->end(__('Salvar todos')); ?>
</div>

