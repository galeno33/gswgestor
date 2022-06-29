<?php
    include ('../sistem_adm/conexao/conexao.php');
    //session_start();

    $query_valor = mysqli_query($conn, "SELECT sum(preco) As 'valor_estoque' FROM produtos");
    //$row_valor = $query_valor->fetch_row();
    //$row_valor = mysqli_num_rows($query_valor);
    
    $row_valor = mysqli_fetch_array($query_valor);
    //$somar = "R$ " . number_format($row_valor['sum(preco)'], 2, ",", ".");
    $somar = $row_valor['valor_estoque'];
    mysqli_close($conn);
    $_SESSION['somar'] = $somar;



?>