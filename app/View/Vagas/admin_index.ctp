<div class="vagas index">
	<h2><?php echo __('Vagas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th width="30%"><?php echo $this->Paginator->sort('descricao','Descrição'); ?></th>
			<th><?php echo $this->Paginator->sort('created', 'Data Criação'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php foreach ($vagas as $vaga): ?>
	<tr>
		<td><?php echo h($vaga['Vaga']['id']); ?>&nbsp;</td>
		<td><?php echo h($vaga['Vaga']['nome']); ?>&nbsp;</td>
		<td><?php echo h($vaga['Vaga']['descricao']); ?>&nbsp;</td>
		<td><?php echo date('d-m-Y H:i', strtotime($vaga['Vaga']['created'])); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Currículos'), array('action' => 'curriculos', $vaga['Vaga']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $vaga['Vaga']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $vaga['Vaga']['id']), null, __('Are you sure you want to delete # %s?', $vaga['Vaga']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Cadastrar Vaga'), array('action' => 'add')); ?></li>
	</ul>
</div>
