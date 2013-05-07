<div class="destaques form">
<?php echo $this->Form->create('Destaque', array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Cadastrar Destaque'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->file('arquivo');
		echo $this->Form->input('link', array('value'=>'http://'));
		echo $this->Form->input('titulo', array('type' =>'textarea', 'value'=>'<span>Residencial</span>
<span>Empreendimento</span> '));
		echo $this->Form->input('prioridade', array('value'=>'0'));
		echo $this->Form->select('target', array(0 => 'Mesma janela', 1 => 'Nova janela'), array('empty'=> false));
		echo '<br />';
		echo $this->Form->select('ativo', array(1 => 'Ativado', 0 => 'Desativado'), array('empty'=> false));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Destaques'), array('action' => 'index')); ?></li>
	</ul>
</div>
