<?php session_start(); 

// Si no existe un carrito, se crea
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
    <link rel="stylesheet" href="../css/styles.css">

    <title>Catálogos</title>
</head>
<body>
        <!-- Cabecera -->

    <header>
        <!-- Oferta de navidad si la sesión de email no existe, redirige al inicio de sesión -->
        <?php
            if(!isset($_SESSION['email'])){?>
         
                <div class="oferta">
                    <a href="login.php">Ofertas de Navidad, hasta un 30% en artículos destacados. Únete/Inicia sesión.</a>
                </div>
        <?php } ?>

        <!-- Barra de navegación -->

        <?php include_once '../includes/cabecera.php'; ?>
    </header>
    <main>
        <?php
        // Agrego la conexión a la base de datos y las funciones para mostrar los productos
        include_once '../includes/funciones_sql.php';        

        // Si se ha seleccionado una categoría, se muestran los productos de esa categoría
        if (isset($_GET['categoria'])) {

            $categoria = $_GET['categoria'];
            $productos = mostrarCategoria($pdo, $categoria);
            $encabezado = "Categoría: ".$categoria;
            
            if($categoria == "dispositivo-movil") $encabezado = "Categoría: Smartphones";

            // Si se ha buscado una cadena de texto, se muestran los productos que coincidan con la búsqueda
        } else if (isset($_GET['buscar']) && $_GET['buscar'] != "") {

            $busqueda = $_GET['buscar'];
            $productos = buscarProductos($pdo, $busqueda);
            $encabezado = "Resultados de la búsqueda: ".$busqueda;

            // Si no se ha encontrado ningún producto, se muestra un mensaje
            if (count($productos) == 0) {
                $encabezado = "No se han encontrado resultados para la búsqueda: ".$busqueda;
            }
        
        // Si no se ha seleccionado una categoría ni se ha buscado nada, se muestran todos los productos
        } else {
            $productos = mostrarProductos($pdo);
            $encabezado = "Todos nuestros productos";
        }


        ?>

       
        <!-- Contenedor principal -->

        <div class="container contenedorTienda">

            <!-- Titulo de la tienda -->

            <div class="encabezadoTienda">
                <h1 class="display-4"><?php echo $encabezado; ?></h1>
            </div>

            <!-- Se recorre el array resultante de la busqueda en base a los filtros -->

            <div class="row filaTienda">
                <?php foreach ($productos as $producto) { ?>
                   
                        <div class="col-md-3 col-sm-6 contenedorProducto">
                            <div class="card">
                                <a href="producto.php?id_producto=<?php echo $producto['id_producto']; ?>"><img src="../img/productos/<?php echo $producto['id_producto']; ?>.webp" class="card-img-top" alt="<?php echo $producto['producto']; ?>"></a>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $producto['producto']; ?></h5>
                                </div>
                            </div>
                        </div>
                    
                <?php } ?>
            </div>
        </div>
    </main>
    <?php include_once '../includes/footer.html'; ?>
</body>
</html>
    