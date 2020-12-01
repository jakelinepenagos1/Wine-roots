<!DOCTYPE html>
<html lang="en"><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> WINE ROOTS  </title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  
    <link rel="stylesheet" href="estilo1.css">
    
    
</head>
<body>
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
                  <a class="nav-link" href="index.php">pagina principal <span class="sr-only">(current)</span></a>
                
                <li class="nav-item">
                  <a class="nav-link" href="producto.php">registar productos</a>
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

    <main>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="imagen"src="img/imagen.jpg" class="d-block w-100 carusel" alt="slider1">
              </div>
              <div class="carousel-item">
                <img class="imagen" src="img/imagen1.jpg" class="d-block w-100 carusel" alt="slider2">
              </div>
              <div class="carousel-item">
                <img class="imagen"src="img/imagen2.jpg" class="d-block w-100 carusel" alt="slider3">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          


            <hr>

                 
         
                 
            <div class="container">

<div class="row">

    <div class="col-5">
        

        <p>
            <img class="img2"src="img/logo.jpg" alt="imagen1">
        Somos el directorio digital de industria de vinos en colombia,reunimos una amplia y variada cantidad de ofertas de empresas que suministran y proveen este producto a nivel nacional e internacional, haciendo parte de la cadena de valor de nuestro comercio. Una de nuestras metas principales es la de abrirse al comercio exterior donde se alcance a llegar a nuevos mercados y clientes, los cuales implican una mayor diversificación y ofrecen un producto de mayor calidad para el cliente
        </p>

        <p>
           Con la mejor mano de obra,buscamos ofrecerte lo mejor en vino,alcohol, acidez, aromas y sabores que se presentan mezclas de sentidos sin que ninguno de estos elementos destaque sobre los demás, creando una sensación armoniosa en la boca,muestran sus aromas primarios de manera franca. Son los aromas que proceden de la variedad de uva y del suelo en el que ésta se cultiva, y por eso te invitamos para que participes de esta experiencia y disfrutes con wine roots .
          </p>


        </div>

        <hr>
        <div class="col-7">

        <hr>

        <h3>registro de usuario</h3>
        <h6>no obligatorio </h6>

        <form class="mt-5" method="POST" action="registroPersonas.php">

        
        <div class="row mt-5">
                
                        <input type="number" class="form-control" placeholder="identificacion" name="cedula">

        <div class="col mt-5">
                    <input type="text" class="form-control" placeholder="Nombre del usuario" name="nombre">
                </div>
                <hr>
                <div class="col mt-5">
                    <input type="text" class="form-control" placeholder="apellido" name="apellido">
                </div>
                <hr>
            
            <div class="row mt-5">
                
                        <input type="text" class="form-control" placeholder="descripcion" name="descripcion">
                </div>
            </div>

            <hr>

            <button class="btn btn-info btn-block mt-4" name="boton">enviar</button>

            
            

    </div>

</div>
      

    </main>

    <footer>

    <hr>

      <h4>derechos resevardos a :</h4>
      <h5>jakeline penagos escobar y a valeria gomez</h5>
      <h4>datos:</h4>
      <h5>coreo:jakelinepenagos@gmail.com-----coreo:valeritagomez@gmail.com</h5>
      <h5>pagina realizada por la intuticion educativa de cesde </h5>
  
     </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
</body>
</html>