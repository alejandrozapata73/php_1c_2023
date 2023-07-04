<?php


echo "estructura armada alumnos!!!";


var_dump($_GET);

echo "<pre>";
var_dump($_POST);
echo "</pre>";


//Conexion
/*
//lugar alojado:
localhost...128.10.10.1

//usuario: xampp
root

//password:
""

//nombre de Base de datos:
empresacac2023 



*/
$conexion = mysqli_connect("localhost","root","","empresacac2023");

if(mysqli_connect_errno()){
    echo "error de conexion";
}else{
    echo "funciona todo ok!!!!!";
}


//consultas......
// mysqli_query();

$consultas = mysqli_query($conexion,"SELECT * FROM alumnos");


echo "<pre>";
var_dump($consultas);
echo "</pre>";

// $listado = mysqli_fetch_assoc($consultas);

// echo "<pre>";
// var_dump($listado);
// echo "</pre>";

// $listadoArray = mysqli_fetch_array($consultas);

// echo "<pre>";
// var_dump($listadoArray);
// echo "</pre>";


echo "<br>";
echo "<h2>probando</h2>";

// echo $listadoArray['nombre'];

while( $listadoArray = mysqli_fetch_array($consultas)){

    
    echo $listadoArray['nombre'] . " " . $listadoArray['apellido'] . " " .$listadoArray['correo'];
    echo "<br>";


}







//errores...




?>
