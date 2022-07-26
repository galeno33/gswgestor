<?php

    session_start();

    //captura os dados do aruivo HTML da pagina cadastro de usuario
    if(isset($_POST['salvar'])){
        if( empty($_POST['matricula']) || empty($_POST['nome']) || empty($_POST['senha'])
            || empty($_POST['cpf_cnpj']) || empty($_POST['empresa']) || empty($_POST['cargo']) ||empty($_POST['situacao']))//====buscar do html
            {
                echo "Please fillout all required fields";
            }else{
                $id = $_POST['matricula'];
                $nome = $_POST['nome'];
                $senha = $_POST['senha'];//===relacionar name="produto" e criando um variavel
                $cpf_cnpj = $_POST['cpf_cnpj'];
                $empresa = $_POST['empresa'];
                $cargo = $_POST['cargo'];
                $situacao = $_POST['situacao'];

            }
    }

        $_SESSION['id_usuario'] = $id;
        $_SESSION['nome_usuario'] = $nome;
        $_SESSION['senha'] = $senha;
        $_SESSION['cpf_cnpj'] = $cpf_cnpj;
        $_SESSION['empresa'] = $empresa;
        $_SESSION['cargo'] = $cargo;
        $_SESSION['situacao'] = $situacao;


?>