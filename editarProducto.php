<?php

include("baseDatos.php");

if(isset($_POST["botonEditar"])){

    $id=$_GET["id"];

    $nombre=$_POST["nombreEditar"];
    $marca=$_POST["marcaEditar"];
    $precio=$_POST["precioEditar"];

    $operacionBD =new BaseDatos();

    $consultaSQL="UPDATE `producto` SET nombreProducto=`$nombre`,marca=`$marca`,precio=`$precio` WHERE idProducto=`$id`";

    $operacionBD->actualizarDatos($consultaSQL);
}




?>