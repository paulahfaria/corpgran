<div class="curriculos index">
	<h2><?php echo __('Curriculos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('telefone'); ?></th>
			<th><?php echo $this->Paginator->sort('arquivo'); ?></th>
			<th><?php echo $this->Paginator->sort('vaga_id'); ?></th>
			<th><?php echo $this->Paginator->sort('area_id'); ?></th>
			<th><?php echo $this->Paginator->sort('visualizado'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($curriculos as $curriculo): ?>
	<tr>
		<td><?php echo h($curriculo['Curriculo']['id']); ?>&nbsp;</td>
		<td><?php echo h($curriculo['Curriculo']['nome']); ?>&nbsp;</td>
		<td><?php echo h($curriculo['Curriculo']['email']); ?>&nbsp;</td>
		<td><?php echo h($curriculo['Curriculo']['telefone']); ?>&nbsp;</td>
		<td><?php echo h($curriculo['Curriculo']['arquivo']); ?>&nbsp;</td>
		<td><?php echo h($curriculo['Curriculo']['vaga_id']); ?>&nbsp;</td>
		<td><?php echo h($curriculo['Curriculo']['area_id']); ?>&nbsp;</td>
		<td><?php echo h($curriculo['Curriculo']['visualizado']); ?>&nbsp;</td>
		<td><?php echo h($curriculo['Curriculo']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $curriculo['Curriculo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $curriculo['Curriculo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $curriculo['Curriculo']['id']), null, __('Are you sure you want to delete # %s?', $curriculo['Curriculo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Curriculo'), array('action' => 'add')); ?></li>
	</ul>
</div>
