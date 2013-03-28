<div class="favoritos index">
	<h2><?php echo __('Favoritos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('empreendimento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($favoritos as $favorito): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($favorito['Empreendimento']['id'], array('controller' => 'empreendimentos', 'action' => 'view', $favorito['Empreendimento']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($favorito['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $favorito['Usuario']['id'])); ?>
		</td>
		<td><?php echo h($favorito['Favorito']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $favorito['Favorito']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $favorito['Favorito']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $favorito['Favorito']['id']), null, __('Are you sure you want to delete # %s?', $favorito['Favorito']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Favorito'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Empreendimentos'), array('controller' => 'empreendimentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empreendimento'), array('controller' => 'empreendimentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
