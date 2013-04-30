<div class="terrenos index">
	<h2><?php echo __('Terrenos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('telefone'); ?></th>
			<th><?php echo $this->Paginator->sort('terreno_endereco'); ?></th>
			<th><?php echo $this->Paginator->sort('terreno_bairro'); ?></th>
			<th><?php echo $this->Paginator->sort('terreno_cidade'); ?></th>
			<th><?php echo $this->Paginator->sort('terreno_estado'); ?></th>
			<th><?php echo $this->Paginator->sort('area'); ?></th>
			<th><?php echo $this->Paginator->sort('valor'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php foreach ($terrenos as $terreno): ?>
	<tr>
		<td><?php echo h($terreno['Terreno']['nome']); ?>&nbsp;</td>
		<td><?php echo h($terreno['Terreno']['email']); ?>&nbsp;</td>
		<td><?php echo h($terreno['Terreno']['telefone']); ?>&nbsp;</td>
		<td><?php echo h($terreno['Terreno']['terreno_endereco']); ?>&nbsp;</td>
		<td><?php echo h($terreno['Terreno']['terreno_bairro']); ?>&nbsp;</td>
		<td><?php echo h($terreno['Terreno']['terreno_cidade']); ?>&nbsp;</td>
		<td><?php echo h($terreno['Terreno']['terreno_estado']); ?>&nbsp;</td>
		<td><?php echo h($terreno['Terreno']['area']); ?>&nbsp;</td>
		<td><?php echo h($terreno['Terreno']['valor']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Detalhe'), array('action' => 'view', $terreno['Terreno']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $terreno['Terreno']['id']), null, __('Are you sure you want to delete # %s?', $terreno['Terreno']['id'])); ?>
		</td>
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
