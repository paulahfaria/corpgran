<div class="empreendimentos index">
	<h2><?php echo __('Empreendimentos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('bairro_id'); ?></th>
			<th><?php echo $this->Paginator->sort('quarto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('etapa_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php foreach ($empreendimentos as $empreendimento): ?>
	<tr>
		<td><?php echo h($empreendimento['Empreendimento']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $empreendimento['Bairro']['nome']; ?>
		</td>
		<td>
			<?php echo $empreendimento['Quarto']['nome']; ?>
		</td>
		<td>
			<?php echo $empreendimento['Etapa']['nome']; ?>
		</td>
		<td><?php echo h($empreendimento['Empreendimento']['nome']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Imagens'), array('controller'=>'imagens','action' => 'edit', $empreendimento['Empreendimento']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $empreendimento['Empreendimento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $empreendimento['Empreendimento']['id']), null, __('Are you sure you want to delete # %s?', $empreendimento['Empreendimento']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
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
		<li><?php echo $this->Html->link(__('Novo Empreendimento'), array('action' => 'add')); ?></li>
	</ul>
</div>
