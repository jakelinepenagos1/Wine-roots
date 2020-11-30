<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTADO</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php"> 
            <img class="logo"src="img/logo.jpg" width="55" height="55"class="o-inline-block align-top" alt="logo1" loading="lazy">WINE ROOTS 
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="listadoProducto.php">productos en venta<span class="sr-only">(current)</span></a>
                
                <li class="nav-item">
                  <a class="nav-link" href="producto.php">registar productos</a>
                </li>

                
                <li class="nav-item">
                <a class="nav-link" href="index.php">pagina principal</a>
                </li>


                </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="busqueda" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">BUSCAR</button>
                
              </form>
            </div>
          </nav>

    </header>


    <?php 
        //Consultar datos
        //1. Incluir el archivo BaseDatos
        include("baseDatos.php");

        //2. Crear una copia o objeto de la BaseDatos
        $operacionBD=new BaseDatos();

        //3. Crear una consulta para BUSCAR en SQL
        $consultaSQL="SELECT * FROM producto WHERE 1";

        //4. Almacenar la respuesta de la consula (ejecutando la consulta)
        $producto=$operacionBD->consultarDatos($consultaSQL);

        
    ?>

    <div class="container">
    
        <div class="row row-cols-1 row-cols-md-3">

            <?php foreach($producto as $producto):?>

                    <div class="col mb-4">
                        
                        <div class="card h-100">
                        <img src=" <?php echo($producto["foto"]) ?> " class="card-img-top" alt="foto">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo($producto["nombreProducto"])?></h5>
                            <h6>tiempo que ha estado en conservacion</h6>
                            <p class="card-text"><?php echo($producto["tiempo"])?></p>
                            <h6>cantidad que se enuentra en venta </h6>
                            <p class="card-text"><?php echo($producto["cantidad"])?></p>
                                <a href="eliminarPersonas.php?id=<?php echo($usuario["codigoUsuario"])?>" class="btn btn-danger">Eliminar</a>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar">
                                   Editar
                                </button>
                            </div>
                        </div>

                        <div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edición</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="">

                                        <div class="form-group">
                                            <label>Nombre:</label>
                                            <input type="text" class="form-control">  
                                        </div>

                                        <div class="form-group">
                                            <label>Descripcion:</label>
                                            <textarea class="form-control" rows="3"></textarea>  
                                        </div>

                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    
                                    </form>
                                </div>
                                
                                </div>
                            </div>
                        </div>

                    
                    </div>

            <?php endforeach ?>


        </div>
    
    
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>   
</body>
</html>