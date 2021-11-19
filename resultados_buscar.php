<!doctype html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>:Home_ArteConceptual:</title>
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="./css/style.css">

  </head>

  <body class="contenedorio">
  <nav class="navbar navbar-light bg-light fixed-top">
        <div class="container-fluid w-75">
          <a class="navbar-brand" href="index.html">
              <img src="img/logo.jpg" style="width:150px;"></img>
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link" href="historia.html">Historia</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="artistas.html">Artistas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="galeria.html">Galeria</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="nosotros.html">Nosotros</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contacto.html">Contacto</a>
                  </li>
              </ul>
              <form action="resultados_buscar.php" method="post">
                <label style="padding-top: 10px;">
                <input class="btn btn-light"type="search" name="buscar" placeholder="Buscar..." />
                <input  class="btn btn-secondary" type="submit" value="Enviar">
                </label>
                </form>
            </div>
          </div>
        </div>
      </nav>


<div style="width:80%; margin:auto; block;" >

<?php
	include('conexion.php');

	$buscar = $_POST['buscar'];
	echo "Su consulta: <em>".$buscar."</em><br>";

	$consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '%$buscar%' OR apellido LIKE '%$buscar%' ");
?>
<div>
	<p style="width:80%; margin:auto; display: block; margin-top:100px; text-align: center; font-size: 20px; margin-bottom: 20px;">Cantidad de Resultados: 
	<?php
		$nros=mysqli_num_rows($consulta);
		echo $nros;
	?>
	</p>
    
	<?php
		while($resultados=mysqli_fetch_array($consulta)) {
	?>
    <p >
    <img style="width:80%; margin:auto; display: block;" src=<?php echo $resultados['foto']?>>

		<?php	
    
			echo $resultados['nombre'];
			echo $resultados['apellido'];
			echo $resultados['bio']; 
			?>
			
    </p>
    <hr/>
    <?php
		}

		mysqli_free_result($consulta);
		mysqli_close($conexion);

	?>
</div>
  </div>

<!-- Footer -->
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-12">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="registro.php" role="button"
          ><i class="fab fa-facebook-f">Registrate</i></a>

      </section>
      <br></br>
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





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
<script src="./js/bootstrap.min.js"></script>

</body>
</html>

