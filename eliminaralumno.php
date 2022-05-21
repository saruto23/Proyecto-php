
<?php require_once 'includes/cabecera.php'; ?>	

<!-- CAJA PRINCIPAL -->
<div id="principal">
	
	<br/>
	<form action="borraalumno.php" method="POST">
		<label for="numexp">Número de expediente:</label>
		<input type="number" name="numexp" />
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'numexp') : ''; ?>
			
		<input type="submit" value="Eliminar" />
	</form>
	<?php borrarErrores(); ?>
</div> <!--fin principal-->