<?php


echo "<pre>";
var_dump($_GET);
echo "</pre>";

echo $_GET['usuario'];
echo $_GET['pass'];

$adminFormulario = $_GET['usuario'];
$passFormulario = $_GET['pass'];



// hola es usuari es $_GET['usuario']  y su pass es  $_GET['pass'];
// hola su suairo es $admin  y su pass es $pass

//usaurio
$admin1 = "mariano";
$passAdmin1 = "123456";


$usuario="admin";


if($usuario="admin"){

echo "<h2>Esto funciona </h2> hola Mariano";

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <ul>
      <li>Carlos</li>
      <li>Carlos</li>
      <li>Carlos</li>
      <li>Carlos</li>
    </ul>

    <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"> <?php echo $_GET['nombre']; ?> </h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>



<?php

}else{

  echo "no existe el usuario!!! y tampoco pass";


  ?>

<button>Volver </button>

<?php




}



$admin = "admin";
$invitado = "invitado";
$user = "usser";


if($_get['usuario']==$admin){

echo "mostar una parte html....";


}else if($_get['usuario']==$invitado){

  echo "mostar una parte html si sos invitado....";

}else if($_get['usuario']==$user){

  echo "mostar una parte html si sos Usuario Comun....";

}


switch($_get['usuario']){

  case $invitado:


}








?>

