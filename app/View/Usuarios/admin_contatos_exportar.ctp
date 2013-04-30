<table>

	<?php foreach($contatos as $contato){ ?>
		<tr>
			<td><?php echo $contato['Contato']['email']; ?> </td>
		</tr>	
	<?php } ?>
</table>
