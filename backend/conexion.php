<?php
    function conexion(){
        return mysqli_connect(
            "localhost",
            "ezequielmendoza",
            "EzeMen02Amk",
            "inventario_computo"
        );
    }
?>