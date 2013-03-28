<div class="bairros view">
<h2><?php  echo __('Bairro'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bairro['Bairro']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($bairro['Bairro']['nome']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bairro'), array('action' => 'edit', $bairro['Bairro']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bairro'), array('action' => 'delete', $bairro['Bairro']['id']), null, __('Are you sure you want to delete # %s?', $bairro['Bairro']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bairros'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bairro'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empreendimentos'), array('controller' => 'empreendimentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empreendimento'), array('controller' => 'empreendimentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Empreendimentos'); ?></h3>
	<?php if (!empty($bairro['Empreendimento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Bairro Id'); ?></th>
		<th><?php echo __('Quarto Id'); ?></th>
		<th><?php echo __('Etapa Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Atributos'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($bairro['Empreendimento'] as $empreendimento): ?>
		<tr>
			<td><?php echo $empreendimento['id']; ?></td>
			<td><?php echo $empreendimento['bairro_id']; ?></td>
			<td><?php echo $empreendimento['quarto_id']; ?></td>
			<td><?php echo $empreendimento['etapa_id']; ?></td>
			<td><?php echo $empreendimento['nome']; ?></td>
			<td><?php echo $empreendimento['descricao']; ?></td>
			<td><?php echo $empreendimento['atributos']; ?></td>
			<td><?php echo $empreendimento['created']; ?></td>
			<td><?php echo $empreendimento['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'empreendimentos', 'action' => 'view', $empreendimento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'empreendimentos', 'action' => 'edit', $empreendimento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'empreendimentos', 'action' => 'delete', $empreendimento['id']), null, __('Are you sure you want to delete # %s?', $empreendimento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Empreendimento'), array('controller' => 'empreendimentos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
