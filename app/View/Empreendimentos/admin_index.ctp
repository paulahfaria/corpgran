<div class="empreendimentos index">
	<h2><?php echo __('Empreendimentos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('bairro_id'); ?></th>
			<th><?php echo $this->Paginator->sort('quarto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('etapa_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($empreendimentos as $empreendimento): ?>
	<tr>
		<td><?php echo h($empreendimento['Empreendimento']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($empreendimento['Bairro']['nome'], array('controller' => 'bairros', 'action' => 'view', $empreendimento['Bairro']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($empreendimento['Quarto']['nome'], array('controller' => 'quartos', 'action' => 'view', $empreendimento['Quarto']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($empreendimento['Etapa']['nome'], array('controller' => 'etapas', 'action' => 'view', $empreendimento['Etapa']['id'])); ?>
		</td>
		<td><?php echo h($empreendimento['Empreendimento']['nome']); ?>&nbsp;</td>
		<td><?php echo h($empreendimento['Empreendimento']['created']); ?>&nbsp;</td>
		<td><?php echo h($empreendimento['Empreendimento']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Imagens'), array('controller'=>'imagens','action' => 'edit', $empreendimento['Empreendimento']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $empreendimento['Empreendimento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $empreendimento['Empreendimento']['id']), null, __('Are you sure you want to delete # %s?', $empreendimento['Empreendimento']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Empreendimento'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Bairros'), array('controller' => 'bairros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bairro'), array('controller' => 'bairros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quartos'), array('controller' => 'quartos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quarto'), array('controller' => 'quartos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Etapas'), array('controller' => 'etapas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etapa'), array('controller' => 'etapas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Favoritos'), array('controller' => 'favoritos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Favorito'), array('controller' => 'favoritos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Imagens'), array('controller' => 'imagens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imagen'), array('controller' => 'imagens', 'action' => 'add')); ?> </li>
	</ul>
</div>
