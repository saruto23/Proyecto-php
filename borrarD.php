
<?php require_once 'includes/cabecera.php'; ?>

<?php
$id = isset($_REQUEST['idDesarrollador']) ? $_REQUEST['idDesarrollador'] : null;
$resultado = obtenerDesarrollador($db,$id);
$desarrollador = mysqli_fetch_assoc($resultado);
?>
<!-- CAJA PRINCIPAL -->
<div  class="container">
    <div class="mb-1">
        <h1 class="display-1  ">Borrar Desarrollador</h1>
    </div>
    <br/>
    <div class = "col-6">
        <form action="borrarD2.php" method="POST">

            <div class="form-floating mb-3">
                <input value="<?=$desarrollador['nombre']?>" type="text" class="form-control" id="floatingInput" placeholder="Nombre" name="nombre" disabled />
                <label for="floatingInput">Nombre</label>
                <input value="<?=$desarrollador['idDesarrollador']?>" name="idDesarrollador" type="hidden"/>

            </div>

            <div class="form-floating mb-3">
                <input value="<?=$desarrollador['pais']?>" type="text" class="form-control" id="floatInput" placeholder="País" name="pais" disabled />
                <label for="floatingInput">País</label>

            </div>



            <div class="form-floating mb-3">
                <button class="btn btn-danger " type="submit" value="Guardar" > Borrar Desarrollador</button>
            </div>
        </form>
    </div>
</div> <!--fin principal-->