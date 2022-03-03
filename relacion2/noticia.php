<?php
    
    $server = mysqli_connect("127.0.0.1","cursophp","","lindavista");
    //print_r($_POST);
    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
    $categoria = $_POST['categoria'];
    //$imagen = $_POST['imagen'];

    $fecha = date("d-m-y");

    if(
        $server->query("INSERT INTO noticias (titulo,texto,categoria,fecha) VALUES ('".$titulo."','".$texto."','".$categoria."','".$fecha."')")
    ){
        echo "error de insercion";
    }
    $server->close;

    header("Location: http://localhost/PW/relacion2/ej1.php");

?>