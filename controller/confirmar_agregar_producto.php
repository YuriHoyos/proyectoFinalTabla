<?php
include_once('../modelo/productoDAO.php');

if(isset($_GET['nombre']) && isset($_GET['descripcion'])) {
    $nombre = $_GET['nombre'];
    $descripcion = $_GET['descripcion'];

    // Aquí podrías agregar el producto utilizando tu lógica actual
    $productoDAO = new ProductoDAO();
    if ($productoDAO->agregarProducto($nombre, $descripcion)) {
        echo "<script>alert('Producto agregado correctamente'); window.location.href='../index.php';</script>";
        exit();
    } else {
        echo "Error al agregar el producto.";
    }
} else {
    // Si no se recibieron los datos del producto, redirigimos a la página anterior
    header("Location: ../index.php");
    exit();
}
?>
