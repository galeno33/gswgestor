<?php
    //session_start();    
    
     
    function estoque(){
         
        
        
       $resultEstoque = $_SESSION['resultProdut'];

     //if(($result) AND ($result->num_rows != 0)){
        while($row = mysqli_fetch_assoc($resultEstoque)){
            //substituir
            $codigo = $row['codigo'];
            $nome = $row['nome']; 
            $tipo = $row['tipo'];
            $modelo = $row['modelo'];
            $ano = $row['ano'];
            $marca = $row['marca'];
            $preco = $row['preco'];
            $detalhes = $row['detalhes'];
            $diaCadastrado = $row['dia_mes'];
            
            
            echo "<tr>";
            echo "<td>".$codigo."</td>";
            echo "<td>".$nome."</td>";
            echo "<td>".$tipo."</td>";
            echo "<td>".$modelo."</td>";
            echo "<td>".$ano."</td>";
            echo "<td>".$marca."</td>";
            echo "<td>".$diaCadastrado."</td>";
            echo "<td>".$detalhes."</td>";
            echo "<td>".$preco."</td>";
            echo "</tr>";

        }

    }

    estoque();

?>