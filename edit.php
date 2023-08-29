<!DOCTYPE html>
<html>

<head>
    <title>Todo List - Edit Task</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<style>
  textarea {
  resize: none;
}
</style>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">
                <h3 class="text-center mb-5">Editar Tarea</h3>
                <form action="update.php" method="POST">
                    <?php
          // Conexión a la base de datos
          $conn = mysqli_connect("localhost", "root", "", "todolist");

          // Obtener la tarea actual
          $id = $_GET['id'];
          $result = mysqli_query($conn, "SELECT * FROM tasks WHERE id=$id");
          $row = mysqli_fetch_assoc($result);
          ?>
                    <div class="form-group">
                      <textarea name="task" cols="70" rows="6"><?php echo $row['task']; ?></textarea>
                        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                      <!--  <input type="text" class="form-control" name="task" value=""> -->
                    </div>
                    <button type="submit" class="btn btn-success btn-block" name="agregar">Actualizar Tarea</button>
                    <button type="submit" class="btn btn-danger btn-block" name="cancelar">Cancelar Tarea</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>