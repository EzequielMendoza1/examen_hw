<?php
    $sql = "SELECT * FROM t_computo ORDER BY nombre_hw ASC";
    $respuesta = mysqli_query($conexion, $sql)
?>

<table class="table table-hover table-bordered" id="tablaCrud">    
    <thead class="text-center">
        <tr>
            <th>NOMBRE HW</th>
            <th>CATEGORIA</th>
            <th>DESCRIPCION</th>
            <th>NUM DE PIEZAS</th>
            <th>IMAGEN</th>
            <th>ENCARGADO</th>
            <th>FECHA DE AGREGADO</th>
            <th>EDITAR</th>
            <th>ELIMINAR</th>
        </tr>
    </thead>

    <tbody class="text-center">
        <?php
            while($ver = mysqli_fetch_array($respuesta)):
        ?>
        <tr>
            <td><?php echo strtoupper($ver['nombre_hw']); ?></td>
            <td><?php echo strtoupper($ver['categoria']); ?></td>
            <td><?php echo strtoupper($ver['descripcion']); ?></td>
            <td><?php echo strtoupper($ver['num_piezas']); ?></td>
            <td>
                <img src="<?php echo "./archivos/". $ver['imagen']; ?>" width="115px" height="90px">
                <a href="<?php echo "./archivos/" . $ver['imagen']; ?>" download="<?php echo $ver['imagen']; ?>" class="btn btn-success">Descargar</a>
            </td>
            <td><?php echo strtoupper($ver['encargado']); ?></td>
            <td><?php echo strtoupper($ver['fecha']); ?></td>
            <td>
                <a href="./editar.php?id=<?php echo $ver['id']; ?>" class="btn btn-warning">Editar</a>
            </td>
            <td>
                <a href="./backend/eliminar.php?id=<?php echo $ver['id']; ?>&nombre=<?php echo $ver['imagen']; ?>"class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>

</table>