<?php
include_once('../modelo/productoDAO.php'); 

$nombre = $_POST['nombre']; 
$descripcion = $_POST['descripcion']; 

$productoDAO = new ProductoDAO(); 
if ($productoDAO->agregarProducto($nombre, $descripcion)) {
    // Redirige a la página principal
    header("Location: ../index.php");
    // Muestra un mensaje de confirmación
    echo "<script>alert('Producto agregado correctamente');</script>";
    exit(); 
} else {
    echo "Error al agregar el producto.";
}
?>
