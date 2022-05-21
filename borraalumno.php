<?php

if(isset($_POST)){
    
    require_once 'includes/conexion.php';
    
    //var_dump($_POST);
    
    $numexp = $_POST['numexp'];
   
    // Validación
    $errores = array();
    
    
    if(empty($numexp) || !is_numeric($numexp)){
        $errores['numexp'] = 'El número de expediente no es válido';
        
    }

    
    if(count($errores) == 0){
           
            $sql = "DELETE FROM `alumnos` WHERE (numexp='$numexp');";
            
      
        $eliminar = mysqli_query($db, $sql);
        
        //var_dump($eliminar);
        
        
    }else{
        
        $_SESSION["errores_entrada"] = $errores;
        //var_dump($_SESSION);
        
    }
    
    header("Location: eliminaralumno.php");
    
}
