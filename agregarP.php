
<?php require_once 'includes/cabecera.php'; ?>

<!-- CAJA PRINCIPAL -->
<div  class="container">

    <br/>
    <div class = "col-6">
        <form action="agregarP2.php" method="POST">

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Nombre" name="nombre" />
                <label for="floatingInput">Nombre</label>
                <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'nombre') : ''; ?>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatInput" placeholder="Compañia" name="compania" />
                <label for="floatingInput">Compañia</label>
                <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'compania') : ''; ?>
            </div>


            <div class="form-floating mb-3">
                <button class="btn btn-primary" type="submit" value="Guardar"> Crear </button>
            </div>

        </form>
    </div>
    <?php borrarErrores(); ?>
</div> <!--fin principal-->