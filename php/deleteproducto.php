<?php 

    include("conexion.php");

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        echo $id;
        $query = "DELETE FROM productos WHERE id_producto = '$id'";

        $resultado = $conexion->query($query);

        header("Location: ../administrador.php");

    }

?>