<?php require_once 'includes/cabecera.php'; ?>


<div  class="container">
    <br>
    <br>
    <div class = "col-12">
        <h1 class="display-1 text-center">Exclusivos de Consola</h1>
        <br>
        <br>
        <br>
    </div>

    <div class = "col-12">
        <h3 class="display-3 text-center">Busqueda de juegos</h3>
        <form action="busquedaV.php" method="POST">

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Titulo" name="titulo" />
                <label for="floatingInput">Titulo</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatInput" placeholder="Genero" name="genero" />
                <label for="floatingInput">Genero</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatInput" placeholder="plataforma" name="plataforma" />
                <label for="floatingInput">Plataforma</label>
            </div>

            <div class="form-floating mb-3">
                <button class="btn btn-primary" type="submit" value="Guardar"> Buscar </button>
            </div>
            <br>
            <br>



        </form>
    </div>

    <div class="col-12 ">
        <a href="agregarV.php"><input class="btn btn-warning" type="button" value="Nuevo Videojuego"></a>
        <br>
        <br>
        <table class="table table-dark">
            <thead>
            <tr class="table-active">
                <th>Titulo </th>
                <th>Genero </th>
                <th>Fecha de lanzamiento </th>
                <th>Desarrollador</th>
                <th>Plataforma</th>
                <th>Acciones</th>

            </tr>
            </thead>
            <tbody>


            <?php
            if (!empty($_SESSION['campos']))
            {
                $plataformas = busquedaV($db, $_SESSION['campos']);
            } else{
                $plataformas = obtenerVideojuegos($db);
            }

            if(!empty($plataformas)){
                while($videojuego = mysqli_fetch_assoc($plataformas)){
                    ?>

                    <tr>
                        <td><?=$videojuego['titulo']?></td>
                        <td><?=$videojuego['genero']?></td>
                        <td><?=$videojuego['fLanzamiento']?></td>
                        <td><?=$videojuego['Desarrollador']?></td>
                        <td><?=$videojuego['Plataforma']?></td>
                        <td><a href="editarV.php?idVideojuego=<?=$videojuego['idVideojuego']?>"</a><img src="imagenes/edit.png"/> <a href="borrarV.php?idVideojuego=<?=$videojuego['idVideojuego']?>"</a><img src="imagenes/bin.png"/> </td>
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
