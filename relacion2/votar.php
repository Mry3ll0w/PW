<?php

    $server = mysqli_connect("127.0.0.1","cursophp","","lindavista");

    $voto = $_POST["voto"];
    
    if($voto == 'v1'){
        mysqli_query($server,"UPDATE votos SET votos1=votos1+1");
    }
    else if ($voto == 'v2'){
        mysqli_query($server,"UPDATE votos SET votos2= votos2 + 1"); 
    }

    mysqli_close($server);

    header("Location: http://localhost/PW/relacion2/votos.php");

?>