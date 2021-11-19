
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>:Conceptual_login:</title>
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="./css/style.css">
</head>

<body>

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
                <input class="btn btn-light" type="search" name="buscar" placeholder="Buscar..." />
                <input  class="btn btn-secondary" type="submit" value="Enviar">
                </label>
                </form>
            </div>
          </div>
        </div>
      </nav>

	  <br></br>
	  <br></br>




	<div style="width: 500px; margin: auto; " class="btn-light row ">
	<div class="col-lg-6 mx-auto">
	<h2 class="text-center"  style="padding-top: 20px; padding-bottom:20px;">Logueate</h2>
	<form id="contact-form" action="login.php" method="post">
    	<label >
        	<input  name="usuario" type="text" maxlength="12" class="form-control mx-auto" placeholder="usuario" required/>
        </label><br />
		<p></p>
        <label>
        	<input type="password" name="password" maxlength="12" placeholder="contraseña" class="form-control" required/>
        </label><br />
        	<input style="margin-top: 20px;margin-bottom: 20px;" class="btn btn-secondary" type="submit" value="Login"/>	
    </form>
    <a  href="form_registro.php">Registrate</a> <div style="margin-right: 20px;width: width: 100px; float: right;">si no sos usuario.</div>
	<p></p>
    </div>
    </diV>
	<br></br>
	<br></br>
	<br></br>
	<br></br>
	<br></br>
	<br></br>
<!-- Footer -->
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-12">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="form_registro.php" role="button"
          ><i class="fab fa-facebook-f">Registrate</i></a>
          <a class="btn btn-outline-light btn-floating m-1" href="form_login.php" role="button"
          ><i class="fab fa-facebook-f">Logueate</i></a>

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