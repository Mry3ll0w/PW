<?php
    print_r($_POST);

    $con= new mysqli ("localhost","root","1001","examen");
    
    $found = false;

    foreach ($con->query("SELECT mail FROM datos")as $i)
    {
        if($i['mail']==$_POST['mail']){
            $found=true;break;
        }
    }

    if(!$found){

        $mail = $_POST['mail'];
        $pass = $_POST['pass'];
        $sexo = $_POST['sex'];
        $zip = $_POST['ZIP'];
        $country = $_POST['pais'];

        $insercion="INSERT INTO datos (mail,password,sexo,zip,country) VALUES(?,?,?,?,?)";
        
        $conn = new PDO("mysql:host=localhost;dbname=examen","root","1001");
        
        $conn->prepare($insercion)->execute([$mail, $pass, $sexo, $zip, $country]);
        
    }
    else{
        header("Location:form.php");
    }

?>