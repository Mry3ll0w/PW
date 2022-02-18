<?php


$uploadfile = "fotos/" . basename($_FILES['file']['name']);//Obtenemos el archivo y su extension

    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {//Movemos el archivo desde la variable FILES
        echo "Subida correcta\n";
        header("Location: http://localhost/PW/relacion_ej1/ej9.php");
    } 
    else {
        echo "Error de subida!\n";
    }
    
    exit;

?>