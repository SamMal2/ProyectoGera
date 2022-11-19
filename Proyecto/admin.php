<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    
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


<div class=" justify-content-center ms-5 mt-5 pt-3" >



<h3 class="text-center">Asignaturas</h3>
    
    <div class="container justify-content-center align-items-center ">

    <div class="container mt-1">         
  <table class="table mt-5">
    <thead> 
      <tr class="table-dark">
        <th>Asignaturas</th>
    </table>

<tbody>

<?php
        $connection = mysqli_connect("localhost", "root", "", "materias");
        if($connection->connect_error){
            die("conexion fallda: ". $conn->connect_error);
        }
        $sql = "SELECT * FROM tasignatura";
        $query = mysqli_query($connection, $sql);
        while ($row = mysqli_fetch_array($query)){
            
            ?>
                <tr>
                    <th class="table-primary"><a href="#"><?php echo $row['Asignatura'] ?></a></th><br>
                    
                    
                    <br>
                </tr>
                
            <?php
            }
            ?>
</tbody>
<a class="btn btn-dark m-3" href="index.php">Salir</a>
<a class="btn btn-dark m-3" href="Asignaturas/agregarA.php">Insertar</a>


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