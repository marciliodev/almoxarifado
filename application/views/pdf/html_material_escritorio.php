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
        <?php foreach ($produtos as $produto): ?>

        <td class='center'>1</td>
        <td class='left'><?= $produto->{'disc_produtos'} ?></td>
        <td class='center'><?= $produto->{'qt_atual'} ?></td>
        <td class='center'><?= $produto->{'UF'} ?></td>
        <td class='center'>R$<?= $produto->{'vl_unitario'}?></td>
        <td class='center'>R$<?= $produto->{'vl_total'} ?></td>
        <?php endforeach; ?>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class='center'><b>TOTAL</b></td>
            <?php foreach ($soma as $resultado) ?>
            <td class='center'><b>R$ //$resultado[0]</b></td>
        </tr>
    </table>
</fieldset>
</html>