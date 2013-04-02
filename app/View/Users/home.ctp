	<?php echo $this->Session->flash() ?>
	
	<div class="hero-unit">
		<h2>Bem vindo, <?php echo AuthComponent::user('username') ?>.</h2>
		<p>Use o menu superior para administrar o conteúdo.</p>
	</div>