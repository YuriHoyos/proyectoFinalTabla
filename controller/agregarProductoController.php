<?php
include_once('../modelo/productoDAO.php');

// Verificamos si se enviaron los datos del formulario
if(isset($_POST['nombre']) && isset($_POST['descripcion'])) {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    // Creamos el mensaje de confirmación
    echo "<script>
            var confirmacion = confirm('¿Estás seguro de que deseas agregar este producto?');
            if (confirmacion) {
                // Si el usuario confirma, redirigimos a agregar el producto
                window.location.href = 'confirmar_agregar_producto.php?nombre=$nombre&descripcion=$descripcion';
            } else {
                // Si el usuario cancela, regresamos a la página anterior
                window.history.back();
            }
          </script>";
} else {
    // Si no se enviaron los datos del formulario, mostramos un mensaje de error
    echo "Error: No se recibieron los datos del formulario.";
}
?>
