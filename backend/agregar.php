<?php session_start();
    include './conexion.php';
    $conexion = conexion();

    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $descripcion = $_POST['descripcion'];
    $numeroPiezas = $_POST['numero_piezas'];
    $nombreArchivo = $_FILES['imagen']['name'];
    $from = $_FILES['imagen']['tmp_name'];
    $to ="../archivos/".$nombreArchivo;
    $encargado = $_POST['encargado'];
    $fecha = date('Y-m-d');

    if (move_uploaded_file($from, $to)) {
        $sql = "INSERT INTO t_computo (nombre_hw, categoria, descripcion, num_piezas, imagen, encargado, fecha)
                VALUES('$nombre', '$categoria', '$descripcion', '$numeroPiezas', '$nombreArchivo', '$encargado', '$fecha')";
        
        $respuesta = mysqli_query($conexion, $sql);

        if ($respuesta) {
            $_SESSION['mensaje'] = 'insertar';
            header("location:../index.php");
        }else{
            echo "No se pudo agregar";
        }
    }else{
        echo "No subido";
    }

?>