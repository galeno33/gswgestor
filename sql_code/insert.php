<?php

    //include ('../conexao/conexao.php');
    session_start();
    


    function Insertusuario(){
        $con = $_SESSION['conn'];
        $id = $_SESSION['id_usuario'];
        $usuario = $_SESSION['nome_usuario'];
        $senha = $_SESSION['senha'];
        $cpf_cnpj = $_SESSION['cpf_cnpj'];
        $empresa = $_SESSION['empresa'];
        $cargo = $_SESSION['cargo'];
        $situacao = $_SESSION['situacao'];

        $sql_usuario = "INSERT INTO usuario (`id`, `nome_completo`, `nomeGuerra`, `posto`, `senha`)
        VALUES ($id,'$usuario', $senha, $cpf_cnpj, '$empresa', '$cargo', '$situacao')";//inserir os outros campos do formulario de cadastro de produtos


         if( $con->query($sql_usuario) === TRUE){
            //Alerta após o lançamento da ordem de serviços e o retorna ao formulario de lançamento
            echo  "<script>alert('Usuario cadastrado com Sucesso!');</script>";
             header('Location:');// "<div class='modal fade bd-example-modal-sm' tabindex='-1' role='dialog'> Informações cadastradas com sucesso</div>";
            }else{
            echo"<script>alert('ERRO ao cadastrar o usuario!');</script>";
            }
    }

    Insertusuario();


   
    function financeiro(){
        $con = $_SESSION['conn'];
        $id_financeiro = $_SESSION['id_financeiro'];
        $id_vendido = $_SESSION['id_vendido'];
        $faturamento_anual = $_SESSION['fatura_anual'];
        $faturamento_mensal = $_SESSION['fatura_mensal'];
        $vendas_diarias = $_SESSION['venda_diaria'];

        $sql_financeiro = "INSERT INTO produtos (`id`, `id_financeiro`, `id_vendido`, `faturamento_mensal`, `faturamento_anual`, `vendas_diaria`)
        VALUES ($id_financeiro, $id_vendido, $faturamento_anual, $faturamento_mensal, $vendas_diarias)";//inserir os outros campos do formulario de cadastro de produtos


     if( $con->query($sql_financeiro) === TRUE){
        //Alerta após o lançamento da ordem de serviços e o retorna ao formulario de lançamento
        echo  "<script>alert('Cadastro financeiro efetuado com Sucesso!');</script>";
         //header('Location:../cadastro/cadastroUsuario.php');// "<div class='modal fade bd-example-modal-sm' tabindex='-1' role='dialog'> Informações cadastradas com sucesso</div>";
        }else{
        echo "<script>alert('ERRO no registro financeiro!');</script>";
        }
    }
    financeiro();


?>