<?php
// Conexión a la base de datos
$conn = mysqli_connect("localhost", "root", "", "todolist");

// Obtener el ID de la tarea a eliminar
$id = $_GET['id'];

if (!isset($_POST['confirm'])) {

// Eliminar la tarea de la base de datos
mysqli_query($conn, "DELETE FROM tasks WHERE id=$id");

// Redirigir de vuelta a la página principal
header("Location: index.php");
}else{
    // Cerrar la conexión a la base de datos
mysqli_close($conn);
}
?>
