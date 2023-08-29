<?php
// Conexión a la base de datos
$conn = mysqli_connect("localhost", "root", "", "todolist");

// Obtener la tarea actualizada del formulario
$id = $_POST['id'];
$task = $_POST['task'];

if(isset($_POST['agregar'])) {
    
// Actualizar la tarea en la base de datos
mysqli_query($conn, "UPDATE tasks SET task='$task' WHERE id=$id");

// Redirigir de vuelta a la página principal
header("Location: index.php");

 } elseif(isset($_POST['cancelar'])) {
    header("Location: index.php");
 }

?>
