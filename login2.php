<?php session_start();
 ?>

<!doctype html>
<html>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>:Home_login:</title>
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="./css/style.css">
<body>
<div style="width: 100%; margin: auto; " class="btn-light row text-center">
<div style="width: 80%; margin: auto; text-align:center; " >
<p></p>
<?php
$usuario = $_POST['usuario'];
$password = md5 ($_POST['password']);

include("conexion.php");

$consulta = mysqli_query($conexion, "SELECT nombre, apellido, email FROM usuarios WHERE usuario='$usuario' AND password='$password'");

$resultado = mysqli_num_rows($consulta);

if($resultado!=0){
	$respuesta=mysqli_fetch_array($consulta);
		echo "Hola ".$respuesta['nombre']." ".$respuesta['apellido']."<br />";
		echo "Gracias por registrarte, aquí encontrarás contenido exclusivo solo para los amantes del arte conceptual.";
} else {
	echo "No es un usuario registrado";
	include ("form_registro.php");
}



?>
<p></p>
</div>
</div>
<p></p>
<div class="card-group" style="width: 80%; margin: auto;">
  <div class="card border-0">
    <img src="img/15.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">15% descuento Exclusivo en el mes de Diciembre en todos los cines.</h5>
    </div>
  </div>
  <div class="card border-0">
    <img src="img/discord.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Club Exclusivo de Discord</h5>

    </div>
  </div>
  <div class="card border-0">
    <img src="img/autografo.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Autógrafos de tus artistas favoritos del Arte Conceptual</h5>
    </div>
  </div>
</div>
<br></br>
<div style="width:150px; margin: auto;"><a href="salir.php"><button type="button" class="btn btn-secondary">Cerrar sesión</button></a></div>

<br></br>
<br></br>
<br></br>
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <!-- Section: Social media -->
  
      <!-- Section: Form -->
      <section class="">
        <form action="">
          <!--Grid row-->
          <div class="row d-flex justify-content-center">
            <!--Grid column-->
            <div class="col-auto">
              <p class="pt-2">
              </p>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-md-5 col-12">
              <!-- Email input -->
              <div class="form-outline form-white mb-4">
            
                <label class="form-label" for="form5Example2"> Contacto: arteconecptual@gmail.com</label>
              </div>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
    
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </form>
      </section>
      <!-- Section: Form -->
  
      <!-- Section: Text -->
      <section class="mb-4">
        <p>
         
          Este es un sitio web para los amantes de el arteconceptual, este sitio no se hace responsable por el uso indebido de las obras. Para mayor información o dudas contactarnos.
        </p>
      </section>
      <!-- Section: Text -->
  
      <!-- Section: Links -->
     
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Copyright:
      <a class="text-white" href="index.html">arteconceptual.com</a>
    </div>
    <!-- Copyright -->
  </footer>


</body>
</html>