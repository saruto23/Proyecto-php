
<?php require_once 'includes/cabecera.php'; ?>

<?php
$id = isset($_REQUEST['idVideojuego']) ? $_REQUEST['idVideojuego'] : null;
$resultado = obtenerVideojuego($db,$id);
$videojuego = mysqli_fetch_assoc($resultado);



?>







<!-- CAJA PRINCIPAL -->
<div  class="container">

    <br/>
    <div class = "col-6">
        <form action="guardaalumno.php" method="POST">
            <div class="form-floating mb-3">

                <input value="<?=$videojuego['titulo']?>"  type="text" class="form-control" id="floatingInput" placeholder="Titulo" name="titulo" />
                <label for="floatingInput">Titulo</label>
                <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : ''; ?>
            </div>
            <div class="form-floating mb-3">
            <input value="<?=$videojuego['genero']?>"type="text" class="form-control" id="floatInput" placeholder="Genero" name="genero" />
                <label for="floatingInput">Genero</label>
            <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'genero') : ''; ?>
            </div>
            <div class="form-floating mb-3">
            <input value="<?=$videojuego['fLanzamiento']?>" type="date" class="form-control" id="floatInput" placeholder="Fecha de Lanzamiento" name="fLanzamiento" />
                <label for="floatingInput">Fecha lanzamiento:</label>
            <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'fLanzamiento') : ''; ?>
            </div>
            <div class="form-floating mb-3">
                <select  class="form-select" id="floatingSelect" aria-label="menu de desarrolladores" name="desarrollador">
                    <option value="<?=$videojuego['idDesarrollador']?>"><?=$videojuego['Desarrollador']?></option>
                    <?php
                    $desarrolladores = obtenerDesarrolladores($db);
                    if(!empty($desarrolladores)){
                        while($desarrollador = mysqli_fetch_assoc($desarrolladores)){
                            ?>
                            <?php
                            if ($desarrollador['idDesarrollador'] != $videojuego['idDesarrollador']){
                                ?>
                           <option value='<?=$desarrollador['idDesarrollador']?>'> <?=$desarrollador['nombre']?></option>
<?php
                            }
                        } //Fin while
                    } //Fin if
                    ?>
                </select>
                <label for="desarrollador">Desarrollador</label>
            </div>
<---PLATAFORMA NO TOCAR *********************************************************************************************************************************--->
            <div class="form-floating mb-3">
                <select  class="form-select" id="floatingSelect" aria-label="menu de plataformas" name="plataforma">
                    <option value="<?=$videojuego['idPlataforma']?>"><?=$videojuego['Plataforma']?></option>
                    <?php
                    $plataformas = obtenerPlataformas($db);
                    if(!empty($plataformas)){
                        while($plataforma = mysqli_fetch_assoc($plataformas)){
                            ?>
                            <?php
                            if ($plataforma['idPlataforma'] != $videojuego['idPlataforma']){
                                ?>
                                <option value='<?=$plataforma['idPlataforma']?>'> <?=$plataforma['nombre']?></option>
                                <?php
                            }
                        } //Fin while
                    } //Fin if
                    ?>
                </select>
                <label for="plataforma">Plataforma</label>
            </div>
<div class="form-floating mb-3">
            <button class="btn btn-primary" type="submit" value="Guardar"> Enviar </button>
</div>
        </form>
    </div>
    <?php borrarErrores(); ?>
</div> <!--fin principal-->