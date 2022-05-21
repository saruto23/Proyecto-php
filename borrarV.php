
<?php require_once 'includes/cabecera.php'; ?>

<?php
$id = isset($_REQUEST['idVideojuego']) ? $_REQUEST['idVideojuego'] : null;
$resultado = obtenerVideojuego($db,$id);
$videojuego = mysqli_fetch_assoc($resultado);
?>
<!-- CAJA PRINCIPAL -->
<div  class="container">
    <div class="mb-1">
        <h1 class="display-1  ">Borrar Videojuego</h1>
    </div>
    <br/>
    <div class = "col-6">
        <form action="borrarV2.php" method="POST">

            <div class="form-floating mb-3">
                <input value="<?=$videojuego['titulo']?>"  type="text" class="form-control" id="floatingInput" placeholder="Titulo" name="titulo" disabled />
                <label for="floatingInput">Titulo</label>
                <input value="<?=$videojuego['idVideojuego']?>" name="idVideojuego" type="hidden"/>
                <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : ''; ?>
            </div>

            <div class="form-floating mb-3">
                <input value="<?=$videojuego['genero']?>"type="text" class="form-control" id="floatInput" placeholder="Genero" name="genero" disabled />
                <label for="floatingInput">Genero</label>
                <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'genero') : ''; ?>
            </div>

            <div class="form-floating mb-3">
                <input value="<?=$videojuego['fLanzamiento']?>" type="date" class="form-control" id="floatInput" placeholder="Fecha de Lanzamiento" name="fLanzamiento" disabled/>
                <label for="floatingInput">Fecha lanzamiento:</label>
                <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'fLanzamiento') : ''; ?>
            </div>

            <div class="form-floating mb-3">
                <select  class="form-select" id="floatingSelect" aria-label="menu de desarrolladores" name="desarrollador" disabled>
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

            <div class="form-floating mb-3">
                <select  class="form-select" id="floatingSelect" aria-label="menu de plataformas" name="plataforma" disabled>
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
                <button class="btn btn-danger " type="submit" value="Guardar" > Borrar Videojuego</button>
            </div>
        </form>
    </div>
</div> <!--fin principal-->