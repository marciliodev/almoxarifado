<!DOCTYPE html>
<html>

<table border='1' width='1000' align='center'>
    <tr class='header'>
        <th id='th_cod_RE' class='center'>ITENS</th>
        <th id='th_desc_RSV' class='center'>DESCRIÇÃO DO PRODUTO</th>
        <th class='center'>QTD. ALMOXARIFADO</th>
        <th class='center'>QTD. ATUAL</th>
        <th class='center'>VALOR UNITÁRIO R$</th>
        <th class='center'>VALOR TOTAL R$</th>
    </tr>

    <?php
    //var_dump($dados);
    //echo $dados[0]->disc_produto;
    //exit();
    /*for($i=0; $i < count($dados); $i++){
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
    }*/
    $count = 1;
    ?>

    <?php foreach ($dados as $produto): ?>
        <td class="center"><?=$count++?></td>
        <td class='left'><?=$produto->disc_produto?></td>
        <td class='center'><?=$produto->qt_total?></td>
        <td class='center'><?=$produto->qt_atual?></td>
        <td class='center'>R$ <?=$produto->vl_unitario?></td>
        <td class='center'>R$ <?=$produto->vl_total?></td>
        </tr>
    <?php endforeach; ?>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td class='center'><b>TOTAL R$ </b>
            <?php
            //echo $dados[0]->vl_unitario;
            $valores = 0.00;
            for ($i=0; $i < count($dados); $i++) {
                for ($j = 0; $j < count($dados[$i]); $j++) {
                    $valores += $dados[$i]->vl_unitario;
                }
            }
            echo $valores;
            ?>
        </td>
        <td class='center'><b>TOTAL R$ </b>
            <?php
            //echo $dados[0]->vl_total;
            $valores = 0.00;
            for ($i=0; $i < count($dados); $i++) {
                for ($j = 0; $j < count($dados[$i]); $j++) {
                    $valores += $dados[$i]->vl_total;
                }
            }
            echo $valores;
            ?>
        </td>
    </tr>
</table>
</html>
