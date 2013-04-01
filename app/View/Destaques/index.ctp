<div class="destaques index">
	<h2><?php echo __('Destaques'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('arquivo'); ?></th>
			<th><?php echo $this->Paginator->sort('link'); ?></th>
			<th><?php echo $this->Paginator->sort('target'); ?></th>
			<th><?php echo $this->Paginator->sort('prioridade'); ?></th>
			<th><?php echo $this->Paginator->sort('ativo'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($destaques as $destaque): ?>
	<tr>
		<td><?php echo h($destaque['Destaque']['id']); ?>&nbsp;</td>
		<td><?php echo h($destaque['Destaque']['nome']); ?>&nbsp;</td>
		<td><?php echo h($destaque['Destaque']['arquivo']); ?>&nbsp;</td>
		<td><?php echo h($destaque['Destaque']['link']); ?>&nbsp;</td>
		<td><?php echo h($destaque['Destaque']['target']); ?>&nbsp;</td>
		<td><?php echo h($destaque['Destaque']['prioridade']); ?>&nbsp;</td>
		<td><?php echo h($destaque['Destaque']['ativo']); ?>&nbsp;</td>
		<td><?php echo h($destaque['Destaque']['created']); ?>&nbsp;</td>
		<td><?php echo h($destaque['Destaque']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $destaque['Destaque']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $destaque['Destaque']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $destaque['Destaque']['id']), null, __('Are you sure you want to delete # %s?', $destaque['Destaque']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Destaque'), array('action' => 'add')); ?></li>
	</ul>
</div>
