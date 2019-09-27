<?php
    function viewProduto(array $produtos):string {

        list(
            "item"=>$item,
            "valor"=>$valor,
            "quantidade"=>$quantidade
            )=$produto;
        $total=$valor*$quantidade;
        return <<<STR
            <tr>
                <th>{$item}</th>
                <td>{$valor}</td>
                <td>{$quantidade}</td>
                <td>{$total}</td>
            </tr>
        STR;
    }
