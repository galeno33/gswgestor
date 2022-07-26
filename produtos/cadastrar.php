<?php
   include '../conexao/conexao.php';
   include 'insertProduto.php'; 


    function cadastrando(){
        
        

        if(isset($_POST['cadastrar'])){
            if( empty($_POST['dataMes']) || empty($_POST['matricula'])  || empty($_POST['codigo']) 
                || empty($_POST['nomeProduto']) || empty($_POST['tipo'])  || empty($_POST['modelo'])
                || empty($_POST['ano'])  || empty($_POST['marca'])  || empty($_POST['preco'])  || empty($_POST['detalhe']) )//====obriga a preencher todos os campos
            {
                echo "Por favor preencha todos os campos requeridos";
            }else{

                $dataMes = $_POST['dataMes'];
                $matricula = $_POST['matricula'];//===relacionar name="produto" e criando um variavel
                $codigo = $_POST['codigo'];
                $nomeProduto = $_POST['nomeProduto'];
                $tipo = $_POST['tipo'];
                $modelo = $_POST['modelo'];
                $ano = $_POST['ano'];
                $marca = $_POST['marca'];
                $preco = $_POST['preco'];
                $detalhe = $_POST['detalhe'];

                $con = $_SESSION['conn'];

                $_SESSION['id_produto'] = $matricula;
                $_SESSION['codigo'] = $codigo;
                $_SESSION['nome'] = $nomeProduto;
                $_SESSION['tipo'] = $tipo;
                $_SESSION['modelo'] = $modelo;
                $_SESSION['ano'] = $ano;
                $_SESSION['marca'] = $marca;
                $_SESSION['preco'] = $preco;
                $_SESSION['detalhes'] = $detalhe;
                $_SESSION['dia_cadastrado'] = $dataMes;

                if($con === false){
                    die ("Error: Ao se conectar." .mysqli_connect_error());
                }

                inserirProdutos();
            }

        }

        

    }

    //cadastrando();


?>