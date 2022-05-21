
<?php require_once 'includes/cabecera.php'; ?>

<?php
$id = isset($_REQUEST['idDesarrollador']) ? $_REQUEST['idDesarrollador'] : null;
$resultado = obtenerdesarrollador($db,$id);
$desarrollador = mysqli_fetch_assoc($resultado);



?>

<!-- CAJA PRINCIPAL -->
<div  class="container">
    <div class="mb-1">
        <h1 class="display-1  ">Edición de Desarroladores</h1>
    </div>
    <br/>
    <div class = "col-6">
        <form action="editarD2.php" method="POST">



            <div class="form-floating mb-3">

                <input value="<?=$desarrollador['nombre']?>" type="text" class="form-control" id="floatingInput" placeholder="Nombre" name="nombre" />
                <label for="floatingInput">Nombre</label>
                <input value="<?=$desarrollador['idDesarrollador']?>" name="idDesarrollador" type="hidden"/>
                <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'nombre') : ''; ?>
            </div>
            <div class="form-floating mb-3">
            <input value="<?=$desarrollador['pais']?>" type="text" class="form-control" id="floatInput" placeholder="País" name="pais" />
                <label for="floatingInput">País</label>
            <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'pais') : ''; ?>
            </div>

<div class="form-floating mb-3">
            <button class="btn btn-primary " type="submit" value="Guardar" > Actualizar Desarrollador </button>
</div>
        </form>
    </div>
    <?php borrarErrores(); ?>
</div> <!--fin principal-->