<?php   


include("baseDatos.php");

if(isset($_POST["boton"])){

    //1. Recibir los datos
    
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $cedula=$_POST["cedula"];
    $descripcion=$_POST["descripcion"];
    
 
    
    $operacionBD =new BaseDatos();

    $consultaSQL=" INSERT INTO usuarios(nombre,apellido,cedula,descripcion) VALUES ('$nombre','$apellido','$cedula','$descripcion')";
    
   $usuarios=$operacionBD->agregarDatos($consultaSQL);

}

?>