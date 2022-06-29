<?php

    session_start();
    //informaçõe vinda do formulario de cadastro de produtos
    if(isset($_POST['salvarProduto'])){
        if( empty($_POST['id_produto']) || empty($_POST['codigo']) || empty($_POST['nome']) || empty($_POST['tipo'])
            || empty($_POST['modelo']) || empty($_POST['ano']) || empty($_POST['marca']) || empty($_POST['preco']) 
            || empty($_POST['detalhes']) || empty($_POST['dia_cadastrado']) )//====buscar do html
            {
                echo "Please fillout all required fields";
            }else{
                $id_produto = $_POST['id_produto'];
                $codigo = $_POST['codigo'];
                $nome = $_POST['nome'];//===relacionar name="produto" e criando um variavel
                $tipo = $_POST['tipo'];
                $modelo = $_POST['modelo'];
                $ano = $_POST['ano'];
                $marca = $_POST['marca'];
                $preco = $_POST['preco'];
                $detalhes = $_POST['detalhes'];
                $dia_cadastro = $_POST['dia_cadastro'];
                //$situacao = $_POST['situacao'];
            }
    }

        $_SESSION['id_produto'] = $id_produto;
        $_SESSION['codigo'] = $codigo;
        $_SESSION['image'] = $image;
        $_SESSION['nome'] = $nome;
        $_SESSION['tipo'] = $tipo;
        $_SESSION['modelo'] = $modelo;
        $_SESSION['ano'] = $ano;
        $_SESSION['marca'] = $marca;
        $_SESSION['preco'] = $preco;
        $_SESSION['detalhes'] = $detalhes;
        $_SESSION['dia_cadastrado'] = $dia_cadastro;

?>