<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=4.0">
    <title>Ejercicio 11</title>
</head>
<body>
    
    <h2> Conversor de Euros a Libras, por favor introduzca la cantidad deseada </h2>
    <form action="getter_ej12.php" method="post">
    <p>Euros: <input type="number" name="numero"  step="0.01" /></p>
    <h2>Seleccione a continuacion que moneda quiere</h2>
    
    <input type="radio" id="b1" name="type" value="dolar">
        <label for="b1">Dolar $</label><br>

    <input type="radio" id="b2" name="type" value="libra">
        <label for="b2">Libra Esterlina</label><br>  
    
        

    <p><input type="submit" /></p>
    
</form>

</body>
</html>