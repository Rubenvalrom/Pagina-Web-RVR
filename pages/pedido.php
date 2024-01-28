<?php session_start(); 

// Si no hay una sesión iniciada o no se ha enviado la id del pedido, redirige al index
if (!isset($_SESSION['email']) || !isset($_POST['id_pedido'])) {
    header('Location: ../index.php');
}

// Se introduce la id del pedido en una variable
$id_pedido = $_POST['id_pedido'];

// Se incluye la conexión a la base de datos y las funciones
include_once '../includes/funciones_sql.php';

// Se busca el pedido y el precio en la base de datos
$pedido = buscarProductosPedido($pdo, $id_pedido);
$precio_total = buscarPrecioTotal($pdo, $id_pedido);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pedido <?php echo $id_pedido ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<?php include_once '../includes/cabecera.php'; ?>
<main>
    
    <div class="container" id="noHr">
        <!-- Se muestra el id del pedido -->
        <h1>Pedido <?php echo $id_pedido ?></h1>
        <table class="table">
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                </tr>
                <!-- Se muestran los productos del pedido -->
                <?php foreach ($pedido as $producto) { ?>
                    <tr>
                        <td><?php echo $producto['nombre']; ?></td>
                        <td><?php echo $producto['cantidad']; ?></td>
                        <td><?php echo $producto['precio']; ?></td>
                    </tr>
                    <hr>
                <?php }
                // Se muestra el precio total del pedido 
                foreach ($precio_total as $precio) { ?>
                    <tr>
                        <td></td>
                        <td><b>Total:</b></td>
                        <td><b><?php echo $precio_total['precio_total']; ?></b></td>
                    </tr>
                
               <?php } ?>
        </table>
    </div>
</main>
<?php include_once '../includes/footer.html'; ?>
</body>
</html>
    