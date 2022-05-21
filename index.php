<?php require_once 'includes/cabecera.php'; ?>


<div  class="container">
    <br>
    <br>
    <div class = "col-12">
        <h1 class="display-1 text-center">Exclusivos de Consola</h1>
    </div>
    <div class="col-12 ">
        <a href="anhadiralumno.php"><input class="btn btn-warning" type="button" value="Nuevo"></a>
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
            $videojuegos = obtenerVideojuegos($db);
            if(!empty($videojuegos)){
                while($videojuego = mysqli_fetch_assoc($videojuegos)){
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
            ?>
            </tbody>
        </table>

    </div>



</div>

</body>
</html>
