function eliminarRegistro() {
    $.ajax({
       url: 'eliminar.php',
       type: 'POST',
       data: { id: 1 }, // Aquí debes pasar el ID del registro que se desea eliminar
       success: function(response) {
          // Aquí puedes mostrar un mensaje de éxito y actualizar la página
          console.log(response);
       },
       error: function(xhr, status, error) {
          // Aquí puedes mostrar un mensaje de error
          console.log(xhr);
       }
    });
 }
 