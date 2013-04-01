<div class="destaques form">
<?php echo $this->Form->create('Destaque', array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Editar Destaque'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->file('arquivo');
		echo $this->Form->input('link');
		echo $this->Form->input('prioridade');		
		echo $this->Form->select('target', array(0 => 'Mesma janela', 1 => 'Nova janela'), array('empty'=> false,'default' => $this->request->data['Destaque']['target']));

		echo $this->Form->select('ativo', array(1 => 'Ativado', 0 => 'Desativado'), array('empty'=> false,'default' => $this->request->data['Destaque']['ativo']));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $this->Form->value('Destaque.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Destaque.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Destaques'), array('action' => 'index')); ?></li>
	</ul>
</div>
