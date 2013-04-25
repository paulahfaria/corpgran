<div class="areas index">
	<h2><?php echo __('Áreas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php foreach ($areas as $area): ?>
	<tr>
		<td><?php echo h($area['Area']['id']); ?>&nbsp;</td>
		<td><?php echo h($area['Area']['nome']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $area['Area']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $area['Area']['id']), null, __('Are you sure you want to delete # %s?', $area['Area']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Cadastrar Área'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Voltar aos currículos'), array('controller' => 'curriculos' ,'action' => 'index')); ?></li>
	</ul>
</div>
