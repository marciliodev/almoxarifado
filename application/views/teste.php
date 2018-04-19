<!DOCTYPE html>
<html>

<table border='1' width='1000' align='center'>
	<tr class='header'>
		<th id='th_desc_RSV' class='center'>Descrição do item</th>
		<th class='center'>Quantitativo</th>
		<th class='center'>U.F</th>
		<th class='center'>Valor Unitário. R$</th>
		<th class='center'>Valor Total. R$</th>
	</tr>

	<?php 
	for($i=0; $i < count($dados); $i++){
		for ($c=0; $c < count($dados[$i]); $c++){
			?>
			<tr>
				<td class='left'><?php echo $dados[$i][$c]['disc_produto']; ?></td>
				<td class='left'><?php echo $dados[$i][$c]['qt_total']; ?></td>
				<td class='left'><?php echo $dados[$i][$c]['qt_atual']; ?></td>
				<td class='left'>R$ <?php echo $dados[$i][$c]['vl_unitario']; ?></td>
				<td class='left'>R$ <?php echo $dados[$i][$c]['vl_total']; ?></td>
			</tr>
			<?php 
		}
	}
	?>
	<!--<?php foreach ($dados[0] as $produto): ?>
        <tr>
            <td class='left'><?=$produto['disc_produto']?></td>
            <td class='center'><?=$produto['qt_total']?></td>
            <td class='center'><?=$produto['qt_atual']?></td>
            <td class='center'>R$ <?=$produto['vl_unitario']?></td>
            <td class='center'>R$ <?=$produto['vl_total']?></td> 
        </tr>
    <?php endforeach; ?> -->
    <tr>
    	<td></td>
    	<td></td>
    	<td></td>
    	<td></td>
    	<td class='center'><b>TOTAL</b></td>
    </tr>
</table>
</html>
