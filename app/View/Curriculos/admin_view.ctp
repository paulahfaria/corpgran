<div class="curriculos view">
<h2><?php  echo __('Curriculo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($curriculo['Curriculo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($curriculo['Curriculo']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($curriculo['Curriculo']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefone'); ?></dt>
		<dd>
			<?php echo h($curriculo['Curriculo']['telefone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Arquivo'); ?></dt>
		<dd>
			<?php echo h($curriculo['Curriculo']['arquivo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vaga Id'); ?></dt>
		<dd>
			<?php echo h($curriculo['Curriculo']['vaga_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Area Id'); ?></dt>
		<dd>
			<?php echo h($curriculo['Curriculo']['area_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visualizado'); ?></dt>
		<dd>
			<?php echo h($curriculo['Curriculo']['visualizado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($curriculo['Curriculo']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Curriculo'), array('action' => 'edit', $curriculo['Curriculo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Curriculo'), array('action' => 'delete', $curriculo['Curriculo']['id']), null, __('Are you sure you want to delete # %s?', $curriculo['Curriculo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Curriculos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curriculo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
