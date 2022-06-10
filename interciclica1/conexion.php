
<?php

/* conexion bd mysqli */ 
$conn= new mysqli("localhost", "root", "", "test");
/* echo var_dump($_POST); */



$query1="INSERT INTO interciclica (`nombre`, `email`, `asunto`, `mensaje`) 
        VALUES ('".$_POST['nombre']."', '".$_POST['email']."', '".$_POST['asunto']."', '".$_POST['mensaje']."')";


$conn->query($query1);

header("Location: index.php?enviado=true"); // $_GET["enviado"] = "true"
