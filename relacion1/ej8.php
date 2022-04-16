<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=3.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <?php
        //Imprima los valores del vector asociativo, usando foreach
        $v = array();
        $v [1] = 90;
        $v [30] = 7;
        $v ['e'] = 99;
        $v ['hola'] = 43;

        foreach ($v as $i){
            echo "<pre>$i</pre>";
        }

    ?>
</body>
</html>