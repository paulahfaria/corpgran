<div class="curriculos form">



<h1>Cadastre-se a uma vaga</h1>
<?php $c = 1; foreach($vagas as $vaga){ ?>

<h3><?php echo $vaga['Vaga']['nome']; ?> </h3>
<p><?php echo $vaga['Vaga']['descricao']; ?></p>

<?php echo $this->Form->create('Curriculo', array('type' => 'file','url' =>'/curriculos/trabalhe_conosco/'.$c)); ?>
	<?php
		echo $this->Form->input($c.'.nome', array('label' => '', 'placeholder' => 'Nome'));
		echo $this->Form->input($c.'.email', array('label' => '', 'placeholder' => 'E-mail'));
		echo $this->Form->hidden($c.'.vaga_id', array('value' =>$vaga['Vaga']['id']));
		echo $this->Form->file($c.'.arquivo');
	?>
<?php echo $this->Form->end(__('Enviar')); ?>

<?php $c++; } ?>



</div>

<?php echo $this->Form->create('Curriculo', array('type' => 'file')); ?>
<h2>Trabalhe Conosco</h2>
	<?php
		echo $this->Form->input('0.nome', array('label' => '', 'placeholder' => 'Nome'));
		echo $this->Form->input('0.email', array('label' => '', 'placeholder' => 'E-mail'));
		echo $this->Form->input('0.telefone', array('label' => '', 'placeholder' => 'Telefone'));
		echo $this->Form->select('0.area_id', $areas,  array('empty' => 'Selecione uma área'));
		echo $this->Form->file('0.arquivo');
	?>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>