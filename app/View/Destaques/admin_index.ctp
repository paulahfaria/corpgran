<div class="destaques index">
	<h2><?php echo __('Destaques'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('arquivo'); ?></th>
			<th><?php echo $this->Paginator->sort('link'); ?></th>
			<th><?php echo $this->Paginator->sort('prioridade'); ?></th>
			<th><?php echo $this->Paginator->sort('ativo'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php foreach ($destaques as $destaque): ?>
	<tr>
		<td><?php echo h($destaque['Destaque']['id']); ?>&nbsp;</td>
		<td><?php echo h($destaque['Destaque']['nome']); ?>&nbsp;</td>
		<td><img src="<?php echo $this->Html->url('/files/destaque/arquivo/'.$destaque['Destaque']['id'].'/'.$destaque['Destaque']['arquivo']); ?>" width="300" /></td>
		<td><?php echo h($destaque['Destaque']['link']); ?>&nbsp;</td>
		<td><?php echo h($destaque['Destaque']['prioridade']); ?>&nbsp;</td>
		<td><?php echo ($destaque['Destaque']['ativo'] ==1)?'Sim':'Não'; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $destaque['Destaque']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $destaque['Destaque']['id']), null, __('Are you sure you want to delete # %s?', $destaque['Destaque']['id'])); ?>
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
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Novo Destaque'), array('action' => 'add')); ?></li>
	</ul>
</div>
