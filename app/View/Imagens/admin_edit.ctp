<div class="imagens form">
<?php echo $this->Form->create('Imagem'); ?>
	<fieldset>
	<legend><?php echo __('Editar Imagens'); ?></legend>

	<?php $c = 0; foreach($imagens as $imagem){  ?>

	<div class="edit_imagem">
		<img src="<?php echo $this->Html->url('/files/imagem/arquivo/'.$imagem['Imagem']['id'].'/thumb_'.$imagem['Imagem']['arquivo']); ?> ">
		<?php
			echo $this->Form->input($c.'.id', array('type'=>'hidden','value'=>$imagem['Imagem']['id']));
			echo $this->Form->input($c.'.empreendimento_id', array('type'=>'hidden','value'=>$imagem['Imagem']['empreendimento_id']));
			echo $this->Form->input($c.'.titulo',array('value'=>$imagem['Imagem']['titulo']));
			echo $this->Form->select($c.'.destaque', array(0 => 'Não Destaque', 1 => 'Imagem Destaque'), array('empty'=> false,'default' => $imagem['Imagem']['destaque'],'class'=>'imagemDestaque'));
			echo $this->Form->select($c.'.privado', array(0 => 'Publico', 1 => 'Privado'), array('empty'=> false,'default' => $imagem['Imagem']['privado'],'class'=>'imagemPrivado'));
		?>
		<a href="<?php echo $this->Html->url('/admin/imagens/delete/'.$imagem['Imagem']['id'].'/'.$imagem['Imagem']['empreendimento_id']) ?>">Deletar</a>

	</div>

	<?php $c++; }  ?>

	</fieldset>
<?php echo $this->Form->end(__('Salvar todas')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Cadastrar Imagem'), array('action' => 'add/'.$empreendimento_id)); ?></li>
	</ul>
</div>

