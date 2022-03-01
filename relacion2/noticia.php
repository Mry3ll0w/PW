<?php
    
    $server = mysqli_connect("127.0.0.1","cursophp","","lindavista");
    //print_r($_POST);
    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
    $categoria = $_POST['categoria'];
    $imagen = $_POST['imagen'];

    if(
        $server->query("INSERT INTO noticias(titulo,texto,categoria,imagen) 
        VALUES ($titulo,$texto,$categoria,$imagen)")
    ){
        echo "error de insercion";
    }
    $server->close;

    //header("Location: http://localhost/PW/relacion2/ej1.php");

?>