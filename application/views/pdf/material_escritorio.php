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
        <?= foreach ($this->pdo->query($sql) as $reg):
        $html .= ($color) ? "<tr>" : "<tr class=\"zebra\">";
            $html .= "<td class='center'>";
                $html .= $this->contItens(); //chama a função que conta os itens
                $html .= "</td>"; //Itens do relatório
            $html .= "<td class='left'>{$reg['disc_produto']}</td>"; //descrição do produto
            $html .= "<td class='center'>{$reg['qt_atual']}</td>"; //quantidade total do estoque
            $html .= "<td class='center'>{$reg['UF']}</td>"; //quantidade atual do estoque
            $html .= "<td class='center'>R$ {$reg['vl_unitario']}</td>"; //valor unitário do produto
            $html .= "<td class='center'>R$ {$reg['vl_total']}</td>"; //valor total do produto
            $color = !$color;

            endforeach;

            $html .= ";
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class='center'><b>TOTAL</b></td>";
            //Soma do total do vl_total de cada item da lista
            $soma = "select sum(vl_total) from produtos";
            foreach ($this->pdo->query($soma) as $resultado);
            $html .= "<td class='center'><b>R$ {$resultado[0]}</b></td>
        </tr>
    </table>
</body>";

return $html;
</html>