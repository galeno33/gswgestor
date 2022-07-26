<?php

    //
    //include '../login/selectLogin.php';
    
    

        function selectProduto(){
                include ('../conexao/conexao.php');
                session_start();
                //$conn = $_SESSION['conn'];
                $usuario = $_SESSION['usuario'];


                $sql_produtos = "SELECT produtos.id, produtos.nome, produtos.ano, produtos.marca, produtos.preco, produtos.detalhes 
                FROM produtos JOIN usuario ON produtos.id_produto = usuario.id WHERE usuario.id = '$usuario'";
                $resultProduto = mysqli_query($conn, $sql_produtos) or die ("Erro ao tentar consultar Produtos!!!");

                //será enviado o resultadoProduto para o arquivo POST dos produtos, onde serão listados
                $_SESSION['resultProdut'] = $resultProduto;
            
                var_dump($usuario);


            }
            selectProduto();

           
?>