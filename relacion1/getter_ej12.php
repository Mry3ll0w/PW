<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESPUESTA DE CONVERSION</title>
</head>
<body>
    <head>
        <?php
            
            if($_POST['type']=='dolar'){
                echo "Son ".$_POST['numero']*1.14." $";
            }
            elseif($_POST['type']=='libra'){
                echo "Son ".$_POST['numero']*0.83." Libras";
            }
        ?>
    </head>
</body>
</html>