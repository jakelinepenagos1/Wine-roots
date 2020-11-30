<?php   


include("baseDatos.php");

if(isset($_POST["boton"])){

    //1. Recibir los datos
    $nombreProducto=$_POST["nombreProducto"];
    $marca=$_POST["marcaProducto"];
    $tiempo=$_POST["tiempoProducto"];
    $precio=$_POST["precioProducto"];
    $cantidad=$_POST["cantidadProducto"];
    $foto=$_POST["foto"];
 
    
    $operacionBD =new BaseDatos();

    $consultaSQL=" INSERT INTO producto(nombreProducto,marca,tiempo,precio,cantidad,foto) VALUES ('$nombreProducto','$marca','$tiempo','$precio','$cantidad','$foto')";
    
   $producto=$operacionBD->agregarDatos($consultaSQL);

}

?>