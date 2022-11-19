<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    
      <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Temario teleinformatica</title>
</head>
<body>
    <!-- Inicio Navbar -->
    <section>
    <nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Temarios y repasos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Temarios y repasos</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Asignaturas</a>
          </li>
        </ul>
        <form class="d-flex mt-3" role="salir">
          
          <button class="btn btn-danger" type="submit">Salir</button>
        </form>
      </div>
    </div>
  </div>
</nav>
    <!-- Fin Navbar -->
<!--Contenido-->

<h3 class="text-center mt-4 pt-5">Registrar asignatura</h3>

<div class=" container-xxl m-2">

<div class="container d-flex justify-content-center align-items-center ">

    <form class="row g-2 ms-5 me-5 ps-5 pe-5 " action="agregarEnA.php" method="POST"><br>
        ingrese una asignatura: <input class="form-control" type="text" name="Asig" id="Asig">
        
       
        <a class="btn btn-dark" href="../admin">Volver</a>
        <input class="btn btn-secondary" type="submit" value="Registrar">
        </form>
    </div>
</div>
</div>

</body> 
   

<!--fin contenido-->



<footer class="bg-dark text-center text-white">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
</html>