<div class="vagas index">
	<h2>Vaga - <?php echo $vaga['Vaga']['nome']; ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('curriculo'); ?></th>
			<th><?php echo $this->Paginator->sort('created', 'Data'); ?></th>			
	</tr>
	<?php foreach ($curriculos as $curriculo): ?>
	<tr>
		<td><?php echo h($curriculo['Curriculo']['nome']); ?>&nbsp;</td>
		<td><?php echo h($curriculo['Curriculo']['email']); ?>&nbsp;</td>
		<td><a target="_blank" href="<?php echo $this->Html->url('/files/curriculo/arquivo/'.$curriculo['Curriculo']['id'].'/'.$curriculo['Curriculo']['arquivo']); ?>">Curriculo</a></td>
		<td><?php echo date('d-m-Y H:i', strtotime($curriculo['Curriculo']['created'])); ?>&nbsp;</td>		
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
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar vagas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Nova vaga'), array('action' => 'add')); ?></li>
	</ul>
</div>
