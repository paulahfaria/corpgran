<div class="favoritos view">
<h2><?php  echo __('Favorito'); ?></h2>
	<dl>
		<dt><?php echo __('Empreendimento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($favorito['Empreendimento']['id'], array('controller' => 'empreendimentos', 'action' => 'view', $favorito['Empreendimento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($favorito['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $favorito['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($favorito['Favorito']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Favorito'), array('action' => 'edit', $favorito['Favorito']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Favorito'), array('action' => 'delete', $favorito['Favorito']['id']), null, __('Are you sure you want to delete # %s?', $favorito['Favorito']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Favoritos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Favorito'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empreendimentos'), array('controller' => 'empreendimentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empreendimento'), array('controller' => 'empreendimentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
