<?php 
    include("39-database.php");
    //consulta certa
    //$sql= "SELECT *FROM users WHERE users = 'Leonardo'";
    //consulta sem resultados
    $sql= "SELECT *FROM users WHERE users = 'chupa cabra'";
    
    $result = mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)>0){
       
        echo $row["id"] . "<br>";
        echo $row["users"] . "<br>";
        echo $row["reg_date"] . "<br>";}
    
        else{
        print"consulta sem resultados   ";
    }
   
   
    mysqli_close($conn);



?> 