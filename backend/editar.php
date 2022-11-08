<?php session_start();
    include "./conexion.php";
    $conexion = conexion();
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $descripcion = $_POST['descripcion'];
    $numeroPiezas = $_POST['numero_piezas'];
    $encargado = $_POST['encargado'];
    $sql = "UPDATE t_computo 
            SET nombre_hw = '$nombre',
                categoria = '$categoria',
                descripcion = '$descripcion',
                num_piezas = '$numeroPiezas',
                encargado = '$encargado' 
            WHERE id = '$id'";
    $respuesta = mysqli_query($conexion, $sql);
    if ($respuesta){
        $_SESSION['mensaje'] = 'actualizar';
        header ('location:../index.php');
    }else{
        echo 'No se pudo :(';
    }
?>