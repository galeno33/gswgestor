<?php
       
            include ('../conexao/conexao.php');
            //session_start(); 
            //$con = $_SESSION['conn'];
            //cadastrando();
            
            if(isset($_POST['cadastrar'])){
                if( empty($_POST['matricula'])  || empty($_POST['codigo']) || empty($_POST['nomeProduto'])
                    || empty($_POST['ano'])  || empty($_POST['marca']) || empty($_POST['preco']) || empty($_POST['detalhe']) )//====obriga a preencher todos os campos
                {
                    echo "Por favor preencha todos os campos requeridos";
                }else{

                    //$diaMes = $_POST['dataMes'];
                    $matricula = $_POST['matricula'];//===relacionar name="produto" e criando um variavel
                    $codigo = $_POST['codigo'];
                    $nomeProduto = $_POST['nomeProduto'];
                    //$tipo = $_POST['tipo'];
                    //$modelo = $_POST['modelo'];
                    $ano = $_POST['ano'];
                    $marca = $_POST['marca'];
                    $preco = $_POST['preco'];
                    $detalhe = $_POST['detalhe'];

                        $sql = "INSERT INTO produtos (`id`, `id_produto`, `nome`, `ano`, `marca`, `preco`, `detalhes`)
                        VALUES ($codigo, $matricula, '$nomeProduto', $ano, '$marca', $preco, '$detalhe')";//inserir os outros campos do formulario de cadastro de produtos

                        
                        if(mysqli_query($conn, $sql)){
                            echo  "<script>alert('Produto cadastrado com sucesso!');</script>";
                        }else{
                            echo  "<script>alert('Error!  Falha ao cadastrar');</script>";
                        }

                        //mysqli_close($con);

                        /*if( $conn->query($sql_produto) === TRUE){
                            //Alerta após o lançamento da ordem de serviços e o retorna ao formulario de lançamento
                            echo  "<script>alert('Produto cadastrado com sucesso!');</script>";
                            header('Location:http://localhost/projetos/sistem_adm/cadastro.php');// "<div class='modal fade bd-example-modal-sm' tabindex='-1' role='dialog'> Informações cadastradas com sucesso</div>";
                        }else{
                            
                        }*/

                }

            }
        //}

        

?>