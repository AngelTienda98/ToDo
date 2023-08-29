<?php
// Conexión a la base de datos
$conn = mysqli_connect("localhost", "root", "", "todolist");

// Obtener la tarea del formulario
$task = $_POST['task'];

// Insertar la tarea en la base de datos
mysqli_query($conn, "INSERT INTO tasks (task) VALUES ('$task')");

// Redirigir de vuelta a la página principal
header("Location: index.php");
?>
