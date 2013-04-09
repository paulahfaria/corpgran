<div class="curriculos index">
	<h2><?php echo __('Curriculos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('telefone'); ?></th>
			<th><?php echo $this->Paginator->sort('arquivo'); ?></th>
			<th><?php echo $this->Paginator->sort('area_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
	</tr>
	<?php  foreach ($curriculos as $curriculo): ?>
	<tr>
		<td><?php echo h($curriculo['Curriculo']['id']); ?>&nbsp;</td>
		<td><?php echo h($curriculo['Curriculo']['nome']); ?>&nbsp;</td>
		<td><?php echo h($curriculo['Curriculo']['email']); ?>&nbsp;</td>
		<td><?php echo h($curriculo['Curriculo']['telefone']); ?>&nbsp;</td>
		<td><a target="_blank" href="<?php echo $this->Html->url('/files/curriculo/arquivo/'.$curriculo['Curriculo']['id'].'/'.$curriculo['Curriculo']['arquivo']); ?>">Curriculo</a></td>
		<td><?php echo h($curriculo['Curriculo']['area_id']); ?>&nbsp;</td>
		<td><?php echo h($curriculo['Curriculo']['created']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</table>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
