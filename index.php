<!--
**********************************************************************************
    APP: TODOLIST
    AUTOR: AngelTienda
    FECHA: 23/oct/2021
    VERSION: v01.9
    ACTUALIZAR: Add module category, check delete button with options menu is yes 
    or no, switch to object oriented programming.
**********************************************************************************
-->
<!DOCTYPE html>
<html>
<head>
  <title>Todo List</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 mt-5">
        <h3 class="text-center mb-5">Todo List</h3>
        <form action="add.php" method="POST">
          <div class="form-group">
            <input type="text" class="form-control" name="task" placeholder="Ingresar tareas" required>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Agregar tareas</button>
        </form>
        <table class="list-group mt-3" >
          
          <?php
          // Conexión a la base de datos
          $conn = mysqli_connect("localhost", "root", "", "todolist");

          $numRegistros = 0;

          // Consulta para obtener todas las tareas
          $result = mysqli_query($conn, "SELECT * FROM tasks ORDER BY id DESC");

          // Mostrar todas las tareas en la lista
          while ($row = mysqli_fetch_assoc($result)) {
                  echo "
                  <tr>
                  <td>" . $row['task'] . "</td>
                  <td><a href='edit.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm float-right mr-1'>Editar</a>
                  </td>
                  <td><a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm float-right mr-1'>Eliminar</a>
                  </td>
                  <tr>";
                  $numRegistros++; 
        }
          // Cerrar conexión a la base de datos
          mysqli_close($conn);
          ?>
        </table>
        <?php 
        if($numRegistros == 0){
          echo "<h4>No hay tareas disponibles.</h4><br>";
        }
        echo "<hr><h5><strong>Total de tareas:</strong> <strong style='color:green'><em>" . $numRegistros."</em></strong></h5>";
        ?>
      </div>
    </div>
  </div>
  <br>
  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href="#!">AngelTienda</a>
  </div>
  <!-- Copyright -->
</body>
</html>
