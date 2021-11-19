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
    <label>Buscar Artistas
    <input type="search" name="buscar" placeholder="Buscar..." />
    <input type="submit" value="Enviar">
    </label>
    </form>
          
            </div>
          </div>
        </div>
      </nav>


      <div id="carouselExampleSlidesOnly" >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/platano.jpg" class="d-block w-100" alt="Bienvenido al mundo del Arte Conceptual">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="text-dark fs-1">Bienvenido al mundo del<p style="background-color: red; text-align: center; width: 350px; color: white; display: block;margin: auto; padding-bottom: 5px; margin-top: 10px;">Arte Conceptual</p></h5> 
              </div>
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>
        </div>
      </div>

      <div style="width: 100%;">
        

        <p class="parrafo1"><strong>Compartir</strong> el acto de mirar resulta una forma de alcanzar un fundamento y de tratar de proyectar en el público una experiencia similar a la primigenia, con la menor interposición posible de condicionantes que puedan desviar ese dato experiencial a territorios diferentes, como las tradiciones en la representación.
          <strong>Lo conceptual es sobre todo una actitud de la que parte el emisor y que se pide al receptor:</strong> en función de si la comparte habrá obra o no. </p>

      </div>

      <div class="card-group border-0">
        <div class="card border-0">
          <img src="img/artista1.jpg" class="card-img-top" alt="Joseph Beuys">
          <div class="card-body">
            <h5 class="card-title">Joseph Beuys</h5>
            <p class="card-text">Joseph Beuys fue una figura incuestionable, Piloto 
              nazi de la Lufwaffe, tuvo un accidente de avión, del 
              que sobrevive gracias a los cuidados de unos 
              tártaros nómadas que evitan su congelamiento 
              cubriéndolo de grasa y fieltro. Desde entonces, esos 
              serán materiales recurrentes en su obra. </p>
              <a href="artistas.html" class="btn btn-secondary">Ver más</a>

          </div>
        </div>
        <div class="card border-0">
          <img src="img/artista2.jpg" class="card-img-top" alt="Robert Rauschenberg">
          <div class="card-body">
            <h5 class="card-title">Robert Rauschenberg</h5>
            <p class="card-text">Rauschenberg estudió en el Instituto de Arte de Kansas City y en la Academia Julian en París, 
              donde conoció a la pintora Susan Weil, con la que se casaría en 1950 y que sería la madre de su 
              hijo, el fotógrafo Christopher Rauschenberg (1951-). En 1948 Rauschenberg y Weil decidieron ir al 
              Black Mountain College en Carolina del Norte.</p>
              <a href="artistas.html" class="btn btn-secondary">Ver más</a>
          </div>
        </div>
        <div class="card border-0">
          <img src="img/artista3.jpg" class="card-img-top" alt="Sol Lewitt">
          <div class="card-body">
            <h5 class="card-title">Sol Lewitt</h5>
            <p class="card-text">fue un artista ligado a varios movimientos, como el arte conceptual y el minimalismo. La pintura, el dibujo, la 
              fotografía y las estructuras (término que él prefería al de escultura) son sus medios artísticos predominantes. 
              Fue objeto de centenares de exposiciones individuales en museos y galerías por todo el mundo desde 1965.</p>
              <a href="artistas.html" class="btn btn-secondary">Ver más</a>
          </div>
        </div>
      </div>
          


      <div class="noticias">
        <h2>Noticias sobre Obras</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4" style="width: 100%; margin: auto;">
          <div class="col">
            <div class="card h-100">
              <img src="img/obras1.jpg" class="img-fluid rounded-start" alt="...">
              <div class="card-body">
                <h5 class="texto_rojo">I Like America and America Likes Me</h5>
                <p class="card-text">El 21 de mayo de 1974, un hombre alto vestido con sombrero de fieltro y chaleco de pescador llega al aeropuerto
                  de John F. Kennedy en un vuelo procedente de Düsseldorf. Pasado el control de Inmigración, se le acercan dos
                  hombres que lo envuelven con una enorme manta de fieltro, lo tumban en una camilla y lo introducen en una
                  ambulancia. Recorren las calles de Nueva York con la sirena aullando hasta llegar a la galería René Block en
                  Manhattan y, una vez allí, lo dejan en una suerte de corral improvisado donde hay pacas de paja, cincuenta
                  ejemplares del Wall Street Journal y... un coyote vivo llamado Little John.</p>
                  <div class="card-footer">
                    <small class="text-muted">Obra de Joseph Beuys</small>
                  </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="img/obras2.jpg" class="img-fluid rounded-start" alt="...">
              <div class="card-body">
                <h5 class="texto_rojo">Monogram</h5>
                <p class="card-text">Monogram es una combinación del artista estadounidense Robert Rauschenberg, realizada entre 1955 y 1959. 
                  Consiste en una cabra de Angora disecada con su sección media atravesando un neumático de automóvil. 
                  El crítico Jorg von Uthmann lo describió como el trabajo más famoso de Rauschenberg en el Huffington Post.
                  En 1965, Pontus Hultén compró la obra de arte para la colección del Moderna Museet de Estocolmo.</p>
                <div class="card-footer">
                  <small class="text-muted">Obra de Robert Rauschenberg</small>
                </div>
            </div>
          </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="img/obras3.jpg" class="img-fluid rounded-start" alt="...">
              <div class="card-body">
                <h5 class="texto_rojo">Incomplete Open Cubes</h5>
              <p class="card-text">Incomplete Open Cubes demuestra una técnica artística integral al arte de la década de 1960: la serialidad.
                En general, el arte serial se genera mediante la aplicación de reglas o planes premeditados. En este caso, LeWitt
                exploró sistemáticamente las 122 formas de , Según el artista, LeWitt pudo haber tomado todos los pasos
                necesarios para realizar cada una de las 122 soluciones a su consulta, como se ve aquí, pero el trabajo difícilmente
                puede entenderse como terminado en el sentido convencional.</p>
              <div class="card-footer">
                <small class="text-muted">Obra de Sol Lewitt</small>
              </div>
            </div>
          </div>
        </div>
      </div>

  

    
<br></br>


    <div class="col-sm-12 row">
        <a class="col-sm-3" href="historia.html">
          <div class="card text-white border-0">
          <img src="img/menu-01.jpg" class="card-img" alt="..." h>
          <div class="card-img-overlay">
            <h5 class="card-title2">Historia</h5>
          </div>
        </div>
      </a>
      <a class="col-sm-3" href="artistas.html">
        <div class="card text-white border-0">
        <img src="img/menu-02.jpg" class="card-img" alt="...">
        <div class="card-img-overlay">
          <h5 class="card-title2">Artistas</h5>
        </div>
      </div>
    </a>
    <a class="col-sm-3" href="galeria.html">
      <div class="card text-white border-0">
      <img src="img/menu-03.jpg" class="card-img" alt="...">
      <div class="card-img-overlay">
        <h5 class="card-title2">Galeria</h5>
      </div>
    </div>
  </a>
  <a class="col-sm-3"href="nosotros.html">
    <div class="card text-white border-0">
    <img src="img/menu-04.jpg" class="card-img" alt="...">
    <div class="card-img-overlay">
      <h5 class="card-title2">Nosotros</h5>
    </div>
  </div>
</a>
    </div>
      
    <br></br>

<!-- Footer -->
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








  
    
    <hr>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
<script src="./js/bootstrap.min.js"></script>
  </body>
</html>

