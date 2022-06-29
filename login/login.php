<?php
    
    include '../login/selectLogin.php';
    
    session_start();

    login();
    function logando(){

        $countUsuario = $_SESSION['count'];
        $resultLog = $_SESSION['resultLogin'];

        if($countUsuario == 1){    
            //if($usuario==846025 || $usuario==846523){
            //header('Location: https://bptur2.000webhostapp.com/principal/home.html');
            
                header('Location:http://localhost/projetos/sistem_adm/home.php');  //home
                while($row_usuario = mysqli_fetch_assoc($resultLog)){
                        echo $row_usuario['matricula'];
                    }       
                    /*while($row_usuario = mysqli_fetch_array($result)){
                        $usuario = $row_usuario['matricula'];
                        //$password = $row_usuario['senha'];
                    }*/
                exit; 
            //}else{
                /*session_start();
                $_SESSION['usuario_logado'] = $id_logado;
                header('Location:http://localhost/projetos/bptur_sistem/usuarios/homeUsuario.php');
                }*/
            // echo "<h1> Erro:</h1>"; 
            //}
        }  
        else{ 

            echo "<script>alert('Falha no Login. Matricula ou senha invalida!');</script>";
            header('Location:http://localhost/projetos/sistem_adm/index.html');//transferir para o caminho do index.htm do sistem_adm
            //echo "<h1> Falha no Login. Invalid username or password.</h1>";
            
        } 
    }
    logando();
    

?>