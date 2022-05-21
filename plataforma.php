<?php require_once 'includes/cabecera.php'; ?>


<div  class="container">
    <br>
    <br>
    <div class = "col-12">
        <h1 class="display-1 text-center">Plataformas</h1>
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
            $plataformas = obtenerPlataformas($db);
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
            ?>
            </tbody>
        </table>

    </div>



</div>

</body>
</html>
