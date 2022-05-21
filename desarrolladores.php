<?php require_once 'includes/cabecera.php'; ?>


<div  class="container">
    <br>
    <br>
    <div class = "col-12">
        <h1 class="display-1 text-center">Exclusivos de Consola</h1>
    </div>
    <div class="col-12 ">
        <a href="agregarV.php"><input class="btn btn-warning" type="button" value="Nuevo Desarrolador"></a>
        <br>
        <br>
        <table class="table table-dark">
            <thead>
            <tr class="table-active">
                <th>nombre </th>
                <th>País </th>
                <th>Logo </th>
                <th>Acciones</th>

            </tr>
            </thead>
            <tbody>
            <?php
            $desarrolladores = obtenerDesarrolladores($db);
            if(!empty($desarrolladores)){
                while($desarrollador = mysqli_fetch_assoc($desarrolladores)){
                    ?>

                    <tr>
                        <td><?=$desarrollador['nombre']?></td>
                        <td><?=$desarrollador['pais']?></td>
                        <td><?=$desarrollador['logo']?></td>
                        <td><a href="editarV.php?idDesarrollador=<?=$desarrollador['idDesarrollador']?>"</a><img src="imagenes/edit.png"/> <a href="borrarV.php?idDesarrollador=<?=$desarrollador['idDesarrollador']?>"</a><img src="imagenes/bin.png"/> </td>
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
