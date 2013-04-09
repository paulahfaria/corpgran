<div class="noticias index">
	<h2><?php echo __('Noticias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th width="30%"><?php echo $this->Paginator->sort('conteudo'); ?></th>
			<th><?php echo $this->Paginator->sort('created','Data'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php foreach ($noticias as $noticia): ?>
	<tr>
		<td><?php echo h($noticia['Noticia']['id']); ?>&nbsp;</td>
		<td><?php echo h($noticia['Noticia']['titulo']); ?>&nbsp;</td>
		<td><?php echo substr($noticia['Noticia']['conteudo'], 0, 200); ?>...&nbsp;</td>
		<td><?php echo date('d-m-Y H:i', strtotime($noticia['Noticia']['created'])); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $noticia['Noticia']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $noticia['Noticia']['id']), null, __('Are you sure you want to delete # %s?', $noticia['Noticia']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nova Notícia'), array('action' => 'add')); ?></li>
	</ul>
</div>
