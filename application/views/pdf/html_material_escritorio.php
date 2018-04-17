<!DOCTYPE HTML>
<html>
<body class='R_M_A'>
    <table border='1' width='1000' align='center'>
        <tr class='header'>
            <th class='center'>Itens</th>
            <th id='th_desc_RSV' class='center'>Descrição do item</th>
            <th class='center'>Quantitativo</th>
            <th class='center'>U.F</th>
            <th class='center'>Valor Unitário. R$</th>
            <th class='center'>Valor Total. R$</th>
        </tr>
        <?php $produtos = @$busca_produtos //chamar a busca de produtos do model?>
        <?php foreach ($produtos as $reg): ?>
        <?php ($color) ? "<tr>" : "<tr class=\"zebra\">" ?>
        <td class='center'>
            <?php $this->contItens(); //chama a função que conta os itens ?>
        </td>
        <td class='left'><?php$reg['disc_produto']?></td>
        <td class='center'><?php$reg['qt_atual']?></td>
        <td class='center'><?php$reg['UF']?></td>
        <td class='center'>R$<?php$reg['vl_unitario']?></td>
        <td class='center'>R$<?php$reg['vl_total']?></td>
        <?php $color = !$color; endforeach; ?>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class='center'><b>TOTAL</b></td>
            <?php //chamar função de somar
            foreach ($soma as $resultado) ?>
            <td class='center'><b>R$ <?php$resultado[0]?></b></td>
        </tr>
    </table>
</body>
</html>