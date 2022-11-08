<?php include './header.php'; ?>
<div class="container">
    <div class="row">.
        <div class="col">
            <br>
            <h2 class="text-center">Agregar Nuevo Archivo</h2>
            <br>
            <a href="./index.php" class="btn btn-info"> <--- Regresar</a>
            <hr>
            <form action="./backend/agregar.php" method="post" enctype="multipart/form-data">

                <br>
                <label for="nombre">Nombre de Hardware</label>
                <input type="text" name="nombre" id="nombre" required class="form-control">

                <br>
                <label for="categoria">Categoria</label>
                <select name="categoria" id="categoria" required class="form-control">

                    <option value="">Elige Una Categoria</option>
                    <option value="Categoria 1">Categoria 1</option>
                    <option value="Categoria 2">Categoria 2</option>
                    <option value="Categoria 3">Categoria 3</option>
                    <option value="Categoria 4">Categoria 4</option>
                    <option value="Categoria 5">Categoria 5</option>

                </select>

                <br>
                <label for="descripcion">Descripcion</label>
                <input type="text" name="descripcion" id="descripcion" required class="form-control">

                <br>
                <label for="numero_piezas">Número de Piezas</label>
                <input type="number" name="numero_piezas" id="numero_piezas" required class="form-control">

                <br>
                <label for="imagen">Imagen del Producto</label>
                <input accept="image/png,image/jpeg" type="file" name="imagen" id="imagen" class="form-control"> <!---- ----->

                <br>
                <label for="encargado">Encargado</label>
                <select name="encargado" id="encargado" required class="form-control">

                    <option value="ELige un Encargado">Elige un Encargado</option>
                    <option value="Encargado 1">Encargado 1</option>
                    <option value="Encargado 2">Encargado 2</option>
                    <option value="Encargado 3">Encargado 3</option>
                    <option value="Encargado 4">Encargado 4</option>
                    <option value="Encargado 5">Encargado 5</option>

                </select>

                <br>
                <button class="btn btn-primary mt-3">Subir</button>
            </form>

        </div>
    </div>
</div>
<?php include './footer.php'; ?>