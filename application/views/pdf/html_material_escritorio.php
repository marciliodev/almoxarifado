<!DOCTYPE HTML>
<html>
<fieldset class='RME'>
    <table border='1' width='1000' align='center'>
        <tr class='header'>
            <th class='center'>Itens</th>
            <th id='th_desc_RSV' class='center'>Descrição do item</th>
            <th class='center'>Quantitativo</th>
            <th class='center'>U.F</th>
            <th class='center'>Valor Unitário. R$</th>
            <th class='center'>Valor Total. R$</th>
        </tr>
        <?php foreach ($produtos as $produto=>$value): ?>
        <td class="center"><?php foreach ($contador as $itens); ?></td>
        <td class='left'><?php$produto['disc_produto']?></td>
        <td class='center'><?php$produto['qt_total']?></td>
        <td class='center'><?php$produto['UF']?></td>
        <td class='center'>R$ <?php$produto['vl_unitario']?></td>
        <td class='center'>R$ <?php$produto['vl_total']?></td>
        <?php endforeach; ?>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class='center'><b>TOTAL</b></td>
            <?php foreach ($soma as $total=>$value): ?>
            <td class='center'><b>R$ <?php$total[0]?></b></td>
            <?php endforeach; ?>
        </tr>
    </table>
</fieldset>
</html>