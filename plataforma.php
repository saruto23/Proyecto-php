<?php require_once 'includes/cabecera.php'; ?>


<div  class="container">
    <br>
    <br>
    <div class = "col-12">
        <h1 class="display-1 text-center">Plataformas</h1>
    </div>

    <div class = "col-12">
        <h3 class="display-3 text-center">Busqueda de Plataformas</h3>
        <form action="busquedaP.php" method="POST">

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Nombre" name="nombre" />
                <label for="floatingInput">Nombre</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatInput" placeholder="Compañia" name="compania" />
                <label for="floatingInput">Compañia</label>
            </div>

            <div class="form-floating mb-3">
                <button class="btn btn-primary" type="submit" value="Guardar"> Buscar </button>
            </div>
            <br>
            <br>



        </form>
    </div>
    <div class="col-12 ">
        <a href="agregarP.php"><input class="btn btn-warning" type="button" value="Nueva Plataforma"></a>
        <br>
        <br>
        <table class="table table-dark">
            <thead>
            <tr class="table-active">
                <th>Nombre </th>
                <th>Compañia </th>
                <th>Acciones </th>
            </tr>
            </thead>
            <tbody>
            <?php
            if (!empty($_SESSION['campos']))
            {
                $plataformas = busquedaP($db, $_SESSION['campos']);
            } else{
                $plataformas = obtenerPlataformas($db);
            }
            if(!empty($plataformas)){
                while($plataforma = mysqli_fetch_assoc($plataformas)){
                    ?>

                    <tr>
                        <td><?=$plataforma['nombre']?></td>
                        <td><?=$plataforma['compañia']?></td>
                        <td><a href="editarP.php?idPlataforma=<?=$plataforma['idPlataforma']?>"</a><img src="imagenes/edit.png"/> <a href="borrarP.php?idPlataforma=<?=$plataforma['idPlataforma']?>"</a><img src="imagenes/bin.png"/> </td>
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
