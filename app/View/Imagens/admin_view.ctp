<div class="imagens view">
<h2><?php  echo __('Imagen'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($imagen['Imagen']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empreendimento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($imagen['Empreendimento']['id'], array('controller' => 'empreendimentos', 'action' => 'view', $imagen['Empreendimento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($imagen['Imagen']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Arquivo'); ?></dt>
		<dd>
			<?php echo h($imagen['Imagen']['arquivo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Destaque'); ?></dt>
		<dd>
			<?php echo h($imagen['Imagen']['destaque']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($imagen['Imagen']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($imagen['Imagen']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Imagen'), array('action' => 'edit', $imagen['Imagen']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Imagen'), array('action' => 'delete', $imagen['Imagen']['id']), null, __('Are you sure you want to delete # %s?', $imagen['Imagen']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Imagens'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imagen'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empreendimentos'), array('controller' => 'empreendimentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empreendimento'), array('controller' => 'empreendimentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
