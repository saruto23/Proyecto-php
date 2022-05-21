<?php require_once 'includes/cabecera.php'; ?>


<div  class="container">
    <br>
    <br>
    <div class = "col-12">
        <h1 class="display-1 text-center">Desarrolladores</h1>
    </div>

    <div class = "col-12">
        <h3 class="display-3 text-center">Busqueda de Desarrolladores</h3>
        <form action="busquedaD.php" method="POST">

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Nombre" name="nombre" />
                <label for="floatingInput">Nombre</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatInput" placeholder="País" name="pais" />
                <label for="floatingInput">País</label>
            </div>

            <div class="form-floating mb-3">
                <button class="btn btn-primary" type="submit" value="Guardar"> Buscar </button>
            </div>
            <br>
            <br>



        </form>
    </div>
    <div class="col-12 ">
        <a href="agregarD.php"><input class="btn btn-warning" type="button" value="Nuevo Desarrollador"></a>
        <br>
        <br>
        <table class="table table-dark">
            <thead>
            <tr class="table-active">
                <th>Nombre </th>
                <th>País </th>
                <th>Acciones</th>

            </tr>
            </thead>
            <tbody>
            <?php
            if (!empty($_SESSION['campos']))
            {
                $desarrolladores = busquedaD($db, $_SESSION['campos']);
            } else{
                $desarrolladores = obtenerDesarrolladores($db);
            }
            if(!empty($desarrolladores)){
                while($desarrollador = mysqli_fetch_assoc($desarrolladores)){
                    ?>

                    <tr>
                        <td><?=$desarrollador['nombre']?></td>
                        <td><?=$desarrollador['pais']?></td>
                        <td><a href="editarD.php?idDesarrollador=<?=$desarrollador['idDesarrollador']?>"</a><img src="imagenes/edit.png"/> <a href="borrarD.php?idDesarrollador=<?=$desarrollador['idDesarrollador']?>"</a><img src="imagenes/bin.png"/> </td>
                    </tr>

                    <?php
                } //Fin while
            } //Fin if
            $_SESSION['campos']=null;
            ?>
            </tbody>
        </table>

    </div>



</div>

</body>
</html>
