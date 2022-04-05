<!DOCTYPE html>
<html lang="en">
    <head>
       <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
   
    <link rel="stylesheet" href="Diseño/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="Diseño/css/login.css">
    <script src="Diseño/js/jquery-3.6.0.min.js"></script>
    <title>Buscando el camino a casa</title>
    
    </head>
<body>
  <!--========================================================== -->
                        <!-- ENCABEZADO -->
  <!--========================================================== -->
  <header class="container-fluid bg-primary d-flex justify-content-center">
  <p class="text-light mb-0 p-2 fs-6"><a href="tel:631-198-7311" style="color:white; text-decoration:none;">Contactanos 631-198-7311</a></p>
    </header>

    <nav  class="navbar navbar-expand-lg navbar-light p-3 navbar-fixed-top"  id="menu">
        <div class="container">
          <a class="navbar-brand" href="#">
              <span class="fs-5 text-primary fw-bold">BUSCANDO EL CAMINO A CASA</span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="principal.html">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Paginas/publicaciones.php">Publicaciones</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#equipo">Equipo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#seccion-contacto">Contactos</a>
              </li> -->
            </ul>
          </div>

        </div>
      </nav>
<div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#login">Iniciar Sesion</a></li>
        <li class="tab"><a href="#signup">Registrarse</a></li>
      </ul>
      
      <div class="tab-content">

      <div id="login">   
          <h1>Bienvenido!</h1>
          
          <form class="form-signin" id="loginform" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
          
            <div class="field-wrap">
            <label>
              Usuario<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Contraseña<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">¿Se te olvido tu contraseña?</a></p>
          
          
          <button type="submit" class="button button-block">ENTRAR</button>
          
          </form>

        </div>

        <div id="signup">   
          <h1>Registrarse</h1>
          
          <form action="/" method="post" id="frmNuevoUsuario">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Nombres<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Apellidos<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Usuario<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Establece una contraseña<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block">EMPEZAR</button>
          
          </form>

        </div> 
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
<footer class="w-100  d-flex  align-items-center justify-content-center flex-wrap d-grid">
  <p class="fs-5 px-3  pt-3">Buscando el camino a casa. &copy; Todos Los Derechos Reservados 2022</p>
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
<script>
   $(".form")
  .find("input, textarea")
  .on("keyup blur focus", function (e) {
    var $this = $(this),
      label = $this.prev("label");

    if (e.type === "keyup") {
      if ($this.val() === "") {
        label.removeClass("active highlight");
      } else {
        label.addClass("active highlight");
      }
    } else if (e.type === "blur") {
      if ($this.val() === "") {
        label.removeClass("active highlight");
      } else {
        label.removeClass("highlight");
      }
    } else if (e.type === "focus") {
      if ($this.val() === "") {
        label.removeClass("highlight");
      } else if ($this.val() !== "") {
        label.addClass("highlight");
      }
    }
  });

$(".tab a").on("click", function (e) {
  e.preventDefault();

  $(this).parent().addClass("active");
  $(this).parent().siblings().removeClass("active");

  target = $(this).attr("href");

  $(".tab-content > div").not(target).hide();

  $(target).fadeIn(600);
});

</script>
</html>
