<?php
    
    $conn = mysqli_connect('127.0.0.1','cursophp','','lindavista');
    print_r($_POST);
    
    echo count($_POST);
    
    foreach($_POST as $i){
        
        $conn->query("DELETE from noticias where id = $i");

    }
    header("Location: http://localhost/PW/relacion2/ej4.php");
    $conn->close();//Cerramos la conexion con el servidor de la 
?>