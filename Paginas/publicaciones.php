<?php
    $conexion = mysqli_connect('localhost','root','','prueba');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
   
    <link rel="stylesheet" href=".../Diseño/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Nombre del proyecto</title>
  </head>
  <body>
  
  <!--========================================================== -->
                        <!-- ENCABEZADO -->
  <!--========================================================== -->
  <header class="container-fluid bg-primary d-flex justify-content-center">
        <p class="text-light mb-0 p-2 fs-6">Contactanos 1-(305)-725-1000</p>
    </header>

    <nav  class="navbar navbar-expand-lg navbar-light p-3 navbar-fixed-top"  id="menu">
        <div class="container">
          <a class="navbar-brand" href="#">
              <span class="fs-5 text-primary fw-bold">Nombre del proyecto</span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../principal.html">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Paginas/publicaciones.php">Publicaciones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#equipo">Equipo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#seccion-contacto">Contactos</a>
              </li>
            </ul>
          </div>

        </div>
      </nav>

      <section class= "post-list">
        <div class="content">
        <?php
          $sql="SELECT * FROM personas";
          $result = mysqli_query($conexion,$sql);
          while($mostrar = mysqli_fetch_array($result)) 
          {
          ?>
          <article class="post">
            <div class="post-header">
              <img src="../Diseño/img/cheems.jpg" id="img">
            <div class = "post-img-1"></div>
            </div>
            <div class = "post-body">
              <span> 17 de marzo de 2022 </span>
              <br>
              <span> <?php echo $mostrar['Ubicaciones']?> </span>
              <br>
              <h2> Persona busca a su familia </h2>
              <p> <?php echo $mostrar['Nombre']?> <?php echo $mostrar['Apellidos']?> </p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam tenetur quasi, rerum, debitis omnis sequi nam a amet quas consequuntur assumenda veritatis obcaecati earum molestias ipsa molestiae? Voluptas, quae laudantium.</p>
              <a href="#" class = "post-link"> Comunicarse </a>
            </div>
          </article>
          <?php
          }
          ?>
          <article class="post">
            <div class = "post-img-2">
            </div>
            <div class = "post-body">
              <span>Persona busca a su familia</span>
              <h2>Ejemplo</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam tenetur quasi, rerum, debitis omnis sequi nam a amet quas consequuntur assumenda veritatis obcaecati earum molestias ipsa molestiae? Voluptas, quae laudantium.</p>
              <a href="#" class = "post-link"> Leer mas</a>
            </div>
          </article>
          <article class="post">
            <div class = "post-img-3">
            </div>
            <div class = "post-body">
              <span>Persona busca a su familia</span>
              <h2>Ejemplo</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam tenetur quasi, rerum, debitis omnis sequi nam a amet quas consequuntur assumenda veritatis obcaecati earum molestias ipsa molestiae? Voluptas, quae laudantium.</p>
              <a href="#" class = "post-link"> Leer mas</a>
            </div>
          </article>
          <article class="post">
            <div class = "post-img-3">
            </div>
            <div class = "post-body">
              <span>Persona busca a su familia</span>
              <h2>Ejemplo</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam tenetur quasi, rerum, debitis omnis sequi nam a amet quas consequuntur assumenda veritatis obcaecati earum molestias ipsa molestiae? Voluptas, quae laudantium.</p>
              <a href="#" class = "post-link"> Leer mas</a>
            </div>
          </article>
      </section>
      
        </div>
        
    <!-- <div class="container">
        <h2></h2>
        <p></p>            
        <table class="" id="table">
          <thead>
            <tr>
              <th>Imagen</th>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th>Ubicacion</th>
            
            </tr>
          </thead>
          <?php
          $sql="SELECT * FROM personas";
          $result = mysqli_query($conexion,$sql);
          while($mostrar = mysqli_fetch_array($result)) 
          {

          ?>
          <tbody>
            <tr>
              <td> <img src="cheems.jpg" class="img-circle" alt="Cinque Terre" width="55" height="55"> </td>
              <td><?php echo $mostrar['Nombre']?></td>
              <td> <?php echo $mostrar['Apellidos']?></td>
              <td><?php echo $mostrar['Ubicaciones']?></td>
            </tr>
          </tbody>
          <?php
          }
          ?>
        </table>
      </div> -->

      <!--========================================================== -->
                        <!--FOOTER-->
<!--========================================================== -->
      <footer class="w-100  d-flex  align-items-center justify-content-center flex-wrap d-grid">
  <p class="fs-5 px-3  pt-3">Nombre del proyecto. &copy; Todos Los Derechos Reservados 2021</p>
  <div id="iconos" >
      <a href="#"><i class="bi bi-facebook"></i></a>
      <a href="#"><i class="bi bi-twitter"></i></a>
      <a href="#"><i class="bi bi-instagram"></i></a>  
  </div>
  
</footer >

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> 
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="main.js"></script>
 
</body>
</html>      
