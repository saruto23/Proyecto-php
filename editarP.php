
<?php require_once 'includes/cabecera.php'; ?>

<?php
$id = isset($_REQUEST['idPlataforma']) ? $_REQUEST['idPlataforma'] : null;
$resultado = obtenerPlataforma($db,$id);
$plataforma = mysqli_fetch_assoc($resultado);



?>

<!-- CAJA PRINCIPAL -->
<div  class="container">
    <div class="mb-1">
        <h1 class="display-1  ">Edición de Plataforma</h1>
    </div>
    <br/>
    <div class = "col-6">
        <form action="editarP2.php" method="POST">



            <div class="form-floating mb-3">

                <input value="<?=$plataforma['nombre']?>"  type="text" class="form-control" id="floatingInput" placeholder="Nombre" name="nombre" />
                <label for="floatingInput">Nombre</label>
                <input value="<?=$plataforma['idPlataforma']?>" name="idPlataforma" type="hidden"/>
                <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'nombre') : ''; ?>
            </div>
            <div class="form-floating mb-3">
            <input value="<?=$plataforma['compañia']?>" type="text" class="form-control" id="floatInput" placeholder="Compañia" name="compania" />
                <label for="floatingInput">Compañia</label>
            <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'compania') : ''; ?>
            </div>

<div class="form-floating mb-3">
            <button class="btn btn-primary " type="submit" value="Guardar" > Actualizar Plataforma </button>
</div>
        </form>
    </div>
    <?php borrarErrores(); ?>
</div> <!--fin principal-->