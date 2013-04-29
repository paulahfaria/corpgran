<div class="terrenos view">
<h2><?php  echo __('Terreno'); ?></h2>
<h3>Dados do proprietário</h3>
	<dl>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($terreno['Terreno']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($terreno['Terreno']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefone'); ?></dt>
		<dd>
			<?php echo h($terreno['Terreno']['telefone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profissao'); ?></dt>
		<dd>
			<?php echo h($terreno['Terreno']['profissao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cidade'); ?></dt>
		<dd>
			<?php echo h($terreno['Terreno']['cidade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($terreno['Terreno']['estado']); ?>
			&nbsp;
		</dd>
	</dl>
<h3>Dados do terreno</h3>	
	<dl>		
		<dt><?php echo __('Terreno Endereco'); ?></dt>
		<dd>
			<?php echo h($terreno['Terreno']['terreno_endereco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Terreno Bairro'); ?></dt>
		<dd>
			<?php echo h($terreno['Terreno']['terreno_bairro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Terreno Cidade'); ?></dt>
		<dd>
			<?php echo h($terreno['Terreno']['terreno_cidade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Terreno Estado'); ?></dt>
		<dd>
			<?php echo h($terreno['Terreno']['terreno_estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Area'); ?></dt>
		<dd>
			<?php echo h($terreno['Terreno']['area']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zoneamento'); ?></dt>
		<dd>
			<?php echo h($terreno['Terreno']['zoneamento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Topografia'); ?></dt>
		<dd>
			<?php echo h($terreno['Terreno']['topografia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($terreno['Terreno']['valor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imagem'); ?></dt>
		<dd>
			<a target="_blank" href="<?php echo $this->Html->url('/files/terreno/imagem/'.$terreno['Terreno']['id'].'/'.$terreno['Terreno']['imagem']); ?>" ><img width="400" src='<?php echo $this->Html->url('/files/terreno/imagem/'.$terreno['Terreno']['id'].'/'.$terreno['Terreno']['imagem']); ?>' /></a>
			&nbsp;
		</dd>
	</dl>
</div>
