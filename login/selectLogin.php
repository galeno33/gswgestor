<?php

    include '../conexao/conexao.php';
    
        function login(){
            $con = $_SESSION['conn'];

                //trazer dados informados na pagina login.htmt
            $matricula = $_POST['Matricula'];
            $password = $_POST['password'];
            
            $matricula = stripcslashes($matricula);  
            $password = stripcslashes($password); 
            //$log = stripcslanshes($log); 
            $matricula = mysqli_real_escape_string($con, $matricula);  
            $password = mysqli_real_escape_string($con, $password);

        /*$matricula = $_SESSION['matricula'];
        $password = $_SESSION['password'];*/

            //$log = mysqli_real_escape_string($conn, $log);  
            $sql_login = "SELECT id, senha FROM usuario WHERE id = '$matricula' and senha = '$password'";  //MUDEI DE MATRICULA PARA ID DO BANCO DE DADOS
            $result = mysqli_query($con, $sql_login);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  

            //$row_usuario = mysqli_fetch_assoc($result);

            $_SESSION['row'] = $row;
            $_SESSION['count'] = $count;
            $_SESSION['resultLogin'] = $result;
            //$_SESSION['row_usuario'] = $row_usuario;
            //dados para ser informados na entrada do sistema
            $_SESSION['usuario'] = $matricula;
            $_SESSION['senha'] = $password;


        }

//login();



?>