<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIENDA</title>
    <link rel="stylesheet" href="estilo1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class="formulario">

<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php"> 
            <img class="logo"src="img/logo.jpg" width="50" height="50"class="o-inline-block align-top" alt="logo1" loading="lazy">WINE ROOTS 
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="producto.php">registar productos<span class="sr-only">(current)</span></a>
                
                <li class="nav-item">
                <a class="nav-link" href="index.php">pagina principal</a>
                </li>

                
                <li class="nav-item">
                  <a class="nav-link" href="listadoProducto.php">productos en venta  </a>
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

    <main class="formulario2">
    

        <div class="container">

        <form class="mt-5" method="POST" action="registroProducto.php">
            <div class="row">
                <div class="col mt-6">

                <hr>

                <h3>ingrese la informacion de los siguientes datos </h3>

                <div class="row">
                <div class="col mt-6">

                    <input type="text" class="form-control" placeholder="Nombre del producto" name="nombreProducto">
                </div>
                <div class="colmt-6">
                    <input type="text" class="form-control" placeholder="marca" name="marcaProducto">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6">
                        <input type="number" class="form-control" placeholder="unidades" name="cantidadProducto">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6">
                        <input type="number" class="form-control" placeholder="tiempo en que se conservo(---años----)" name="tiempoProducto">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col mt-6">
                        <input type="number" class="form-control" placeholder="precio (---por unidad---)" name="precioProducto">
                </div>
            </div>
            <div class="row mt-3">
                    <div class="col mt-6">
                        <input type="text" class="form-control" placeholder="FOTO URL" name="foto">
                   </div>
            </div>

    
            </div>
            <div class="row mt-3">
                    <div class="col mt-3">
           
            <button class="boton"  class="btn btn-info btn-block mt-4" name="boton">ingresar producto al mercado</button>

            <hr>
            
            </div>

    
            </div>
                    </form>
        
        </div>
    
    </main>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<footer class="formulario2">


</footer>

</body>

</html>
