<?php session_start();
    include "./conexion.php";
    $conexion = conexion();
    $id = $_GET['id'];
    $nombreImagen = $_GET['nombre'];

    if (unlink("../archivos/" . $nombreImagen)) {
        $sql = "DELETE FROM t_computo WHERE id = '$id'";
        $respuesta = mysqli_query($conexion, $sql);

        if ($respuesta) {
            $_SESSION['mensaje'] = 'eliminar';
            header("location:../index.php");
        }else {
            echo "No se puede borrar el registro";
        }
    }else {
        echo "No se pudo borrar el archivo";
    }

?>