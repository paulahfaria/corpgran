<table cellpadding="0" cellspacing="0">
<tr>
		<th>Nome do propriet�rio</th>
		<th>E-mail do propriet�rio</th>	
		<th>Telefone do propriet�rio</th>		
		<th>Profiss�o do propriet�rio</th>	
		<th>Cidade do propriet�rio</th>	
		<th>Estado do propriet�rio</th>	
		<th>Endere�o do Terreno</th>	
		<th>Bairro do Terreno</th>		
		<th>Cidade do Terreno</th>	
		<th>Estado do Terreno</th>
		<th>�rea do Terreno</th>	
		<th>Expectativa do valor</th>	
		<th>Zoneamento</th>			
		<th>Tipo de tipografia</th>												

</tr>
	<?php foreach ($terrenos as $terreno): ?>
	<tr>
		<td><?php echo utf8_decode($terreno['Terreno']['nome']); ?>&nbsp;</td>
		<td><?php echo utf8_decode($terreno['Terreno']['email']); ?>&nbsp;</td>
		<td><?php echo utf8_decode($terreno['Terreno']['telefone']); ?>&nbsp;</td>
		<td><?php echo utf8_decode($terreno['Terreno']['profissao']); ?>&nbsp;</td>	
		<td><?php echo utf8_decode($terreno['Terreno']['cidade']); ?>&nbsp;</td>		
		<td><?php echo utf8_decode($terreno['Terreno']['estado']); ?>&nbsp;</td>			
		<td><?php echo utf8_decode($terreno['Terreno']['terreno_endereco']); ?>&nbsp;</td>
		<td><?php echo utf8_decode($terreno['Terreno']['terreno_bairro']); ?>&nbsp;</td>
		<td><?php echo utf8_decode($terreno['Terreno']['terreno_cidade']); ?>&nbsp;</td>
		<td><?php echo utf8_decode($terreno['Terreno']['terreno_estado']); ?>&nbsp;</td>
		<td><?php echo utf8_decode($terreno['Terreno']['area']); ?>&nbsp;</td>
		<td><?php echo utf8_decode($terreno['Terreno']['valor']); ?>&nbsp;</td>
		<td><?php echo utf8_decode($terreno['Terreno']['zoneamento']); ?>&nbsp;</td>
		<td><?php echo utf8_decode($terreno['Terreno']['topografia']); ?>&nbsp;</td>		
	</tr>
<?php endforeach; ?>
</table>
	