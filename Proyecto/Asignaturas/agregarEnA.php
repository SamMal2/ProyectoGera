<?php


$asignatura = $_POST['Asig'];



$connection = mysqli_connect("localhost", "root", "", "materias");


if($connection->connect_error){
    die("Falló la conexión: ". $connect_error);
}
$sql = "INSERT INTO tasignatura (Asignatura) VALUES ('$asignatura')";

if($connection->query($sql)== TRUE){
    echo "Nuevo registro agregado exitosamente!";
    header('Location: ../admin.php');
}else{
    echo "Error: " . $sql . "<br>" . $connection->error;
}
    #Conectar y ejecutar instruccion
//cerrar conexion
$connection->close();


?>