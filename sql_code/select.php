<?php


   

   
    function usuario(){
         //
        include ('../sistem_adm/conexao/conexao.php');
        session_start();
        //$con = $_SESSION['conn'];
        $usuario = $_SESSION['usuario'];

        $sql_usuario = "SELECT * FROM usuario WHERE id = '$usuario'";
        $result = mysqli_query($conn, $sql_usuario) or die ("Erro ao tentar consultar Audiências!!!");

        while($rowUsuario = mysqli_fetch_assoc($result)){
            $id = $rowUsuario['id'];
            $nome = $rowUsuario['nome'];
            $senha = $rowUsuario['senha'];
            $cpf_cnpj = $rowUsuario['cpf_cnpj'];
            $empresa = $rowUsuario['empresa'];
            $cargo = $rowUsuario['cargo'];
            $situacao = $rowUsuario['situacao'];


            $_SESSION['id'] = $id;
            $_SESSION['nome'] = $nome;
            $_SESSION['senha'] = $senha;
            $_SESSION['cpf_cnpj'] = $cpf_cnpj;
            $_SESSION['empresa'] = $empresa;
            $_SESSION['cargo'] = $cargo;
            $_SESSION['situacao'] = $situacao;
        }

               

    }
    usuario();

    /*function selectProduto(){
        $con = $_SESSION['conn'];
        $usuario = $_SESSION['usuario'];


        $sql_produtos = "SELECT usuario.nome_completo, audiencia.dia_mes, audiencia.hora, audiencia.arquivos FROM produtos
        JOIN usuario ON produtos.id_produto = usuario.id WHERE usuario.id = $usuario";
        $resultProduto = mysqli_query($con, $sql_produtos) or die ("Erro ao tentar consultar Audiências!!!");

        //será enviado o resultadoProduto para o arquivo POST dos produtos, onde serão listados
        $_SESSION['resultProdut'] = $resultProduto;
       


    }
    selectProduto();
*/
    

?>