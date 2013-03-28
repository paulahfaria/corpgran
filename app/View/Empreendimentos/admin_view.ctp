<div class="empreendimentos view">
<h2><?php  echo __('Empreendimento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($empreendimento['Empreendimento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bairro'); ?></dt>
		<dd>
			<?php echo $this->Html->link($empreendimento['Bairro']['nome'], array('controller' => 'bairros', 'action' => 'view', $empreendimento['Bairro']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quarto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($empreendimento['Quarto']['nome'], array('controller' => 'quartos', 'action' => 'view', $empreendimento['Quarto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etapa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($empreendimento['Etapa']['nome'], array('controller' => 'etapas', 'action' => 'view', $empreendimento['Etapa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($empreendimento['Empreendimento']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($empreendimento['Empreendimento']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Atributos'); ?></dt>
		<dd>
			<?php echo h($empreendimento['Empreendimento']['atributos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($empreendimento['Empreendimento']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($empreendimento['Empreendimento']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Empreendimento'), array('action' => 'edit', $empreendimento['Empreendimento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Empreendimento'), array('action' => 'delete', $empreendimento['Empreendimento']['id']), null, __('Are you sure you want to delete # %s?', $empreendimento['Empreendimento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Empreendimentos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empreendimento'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Favoritos'); ?></h3>
	<?php if (!empty($empreendimento['Favorito'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Empreendimento Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($empreendimento['Favorito'] as $favorito): ?>
		<tr>
			<td><?php echo $favorito['empreendimento_id']; ?></td>
			<td><?php echo $favorito['usuario_id']; ?></td>
			<td><?php echo $favorito['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'favoritos', 'action' => 'view', $favorito['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'favoritos', 'action' => 'edit', $favorito['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'favoritos', 'action' => 'delete', $favorito['id']), null, __('Are you sure you want to delete # %s?', $favorito['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Favorito'), array('controller' => 'favoritos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Imagens'); ?></h3>
	<?php if (!empty($empreendimento['Imagen'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Empreendimento Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Arquivo'); ?></th>
		<th><?php echo __('Destaque'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($empreendimento['Imagen'] as $imagen): ?>
		<tr>
			<td><?php echo $imagen['id']; ?></td>
			<td><?php echo $imagen['empreendimento_id']; ?></td>
			<td><?php echo $imagen['titulo']; ?></td>
			<td><?php echo $imagen['arquivo']; ?></td>
			<td><?php echo $imagen['destaque']; ?></td>
			<td><?php echo $imagen['created']; ?></td>
			<td><?php echo $imagen['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'imagens', 'action' => 'view', $imagen['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'imagens', 'action' => 'edit', $imagen['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'imagens', 'action' => 'delete', $imagen['id']), null, __('Are you sure you want to delete # %s?', $imagen['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Imagen'), array('controller' => 'imagens', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
