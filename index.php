<?php session_start();
    $mensaje = '';
    if (isset($_SESSION['mensaje'])) { //isset permite saber si algo esta definido
        $mensaje = $_SESSION['mensaje'];
        unset($_SESSION['mensaje']); //Destruye un elemento de la sesion
    }
    include './backend/conexion.php';
    include "./header.php";
    $conexion = conexion();
?>
    <div class="container">
        <div class="row">
            <div class="col">
                <br>
                <h2 class="text-center">Examen Unidad 3 </h2>
                <br>
                <a href="./agregar.php" class="btn btn-info">Agregar Producto</a>
                <hr>
                <br>
                <?php include './tabla.php';?>
            </div>
        </div>
    </div>
    <?php include "./footer.php" ?>
    <script>
        let mensaje = '<?php echo $mensaje ?>';
        switch (mensaje) {
            case 'insertar':
                swal('Agregado','Se agrego satisfactoriamente','success');
                break;
            case 'actualizar':
                swal('Datos Actualizados :D','Se actualizo satisfactoriamente','warning');
                break;
            case 'eliminar':
                swal('Eliminado','Se elimino satisfactoriamente','error');
        }
    </script>
