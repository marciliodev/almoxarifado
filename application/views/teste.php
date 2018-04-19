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
<?php foreach ($dados as $produto): ?>
<td class='left'><?=$produto?></td>
<td class='center'><?=$produto?></td>
<td class='center'><?=$produto?></td>
<td class='center'>R$ <?=$produto?></td>
<td class='center'>R$ <?=$produto?></td>
<?php endforeach; ?>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td class='center'><b>TOTAL</b></td>
    </tr>
</table>
</html>