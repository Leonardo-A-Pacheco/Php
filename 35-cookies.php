<?php 

    //dias de expiração do cookie
   
  //  setcookie("fav_food", "pizza", time() + (86400*3), "/");//expira em 30 dias
    
    setcookie("fav_food", "pizza", time() - 0, "/");//expira imediatamente
    
    setcookie("fav_drink", "suco", time() + (86400*3),"/");
    
    setcookie("fav_desert", "sorvete", time() + (86400*4),"/");

     /*foreach($_COOKIE as $key => $value){
            echo"{$key} = {$value} <br>";
     }*/

        if(isset($_COOKIE["fav_food"])){
            echo "compre algumas {$_COOKIE["fav_food"]}s";
        }
        else{
            print("você não tem comida favorita");
        }

        /*Cookies são pequenos pedaços de dados que um servidor web envia para o navegador do usuário para armazenamento temporário. Eles são amplamente usados na web para rastrear informações sobre a atividade do usuário e fornecer uma experiência personalizada. Em PHP, você pode criar, ler e manipular cookies facilmente usando funções nativas.*/

?>


