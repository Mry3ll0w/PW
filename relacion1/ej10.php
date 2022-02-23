<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=3.0">
    <title>Ejercicio 10</title>
</head>
<body>
  
    <table border="6" bordercolor="pink">
    <?php
        //Ídem al anterior, pero que muestre las fotos en 100x100 y que al pulsar
        //abra la foto entera. Compruebe que sólo muestra fotos con extensión
        //.jpg, .png, bmp o .gif (haga una función que lo compruebe usando las
        //expresiones regulares como aparecen en el manual).
        
        //Funcion eliminacion
        function poda_img($v){
            $res = [];
            foreach($v as $i){
                if (str_contains($i,".png")||str_contains($i, ".jpg")|| str_contains($i,".gif")||str_contains($i,".bmp")){
                    
                    array_push($res,$i);
                    
                }
            }
            return $res;
        }
        
        $cont = 0;

        chdir('fotos/');

        $imagenes = scandir(getcwd());
        
        //Eliminamos las imagenes con extension != jpg, .png, bmp o .gif
        $imagenes = poda_img($imagenes);

        foreach($imagenes as $i)//Empezamos por el segudo ya que estan los enlaces .. y . del directorio
        {
            if($cont ==  4){//Cada 4 saltamos
                $cont = 0;
                echo '<tr></tr>';
            }

            echo "<td><a href='fotos/$i'> <img src= 'fotos/$i' width='100' height='100'></a></td>";
            
            $cont++;
        }

    ?>
</body>
</html>