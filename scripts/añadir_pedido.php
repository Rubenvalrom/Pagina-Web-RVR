<?php session_start(); 

// Si el usuario no ha iniciado sesión, se redirige a login.php
if (!isset($_SESSION['email'])){
    header('Location: ../pages/login.php');
}
// Si existe se introduce en una variable
$email = $_SESSION['email'];

// Si no existe un carrito, se crea
if (!isset($_SESSION['carrito']) || empty($_SESSION['carrito'])){
    header('Location: ../pages/tienda.php');

// Si existe un carrito, se crea una variable con el contenido del carrito
}else{
    $carrito = $_SESSION['carrito'];
}

// Incluyo la conexión con la base de datos y las funciones

include_once '../includes/funciones_sql.php';


// Busco e introduzco en variables los datos necesarios para realizar el pedido en la base de datos (email, id_usuario, id_pedido, id_producto, cantidad)

// Busco el id_usuario en la base de datos
$sql_id_usuario = buscarIdUsuario($pdo, $email);
$id_usuario = $sql_id_usuario['id_usuario'];

// Creo un pedido con el id_usuario
$id_pedido = insertPedido($pdo, $id_usuario);

// Recorro el carrito y busco el id_producto y el precio de cada producto en la base de datos

foreach ($carrito as $nombre => $cantidad) {

    // Busco el id_producto y el precio del producto en la base de datos
    $sql_id_producto = buscarIdProducto($pdo, $nombre);
    $id_producto = $sql_id_producto['id_producto'];

    // Busco el precio del producto en la base de datos
    $sql_precio = buscarPrecio($pdo, $id_producto);
    $precio = $sql_precio['precio'];

    // Inserto en la base de datos la línea de pedido con el id_pedido, el id_producto, la cantidad y el precio
    insertLineaPedido($pdo, $id_pedido, $id_producto, $cantidad, $precio);
    quitarStock($pdo, $id_producto, $cantidad);
}
// Vacío el carrito
unset($_SESSION['carrito']);

// Redirijo a la página de usuario donde se muestran todos los pedidos
header('Location: ../pages/usuario.php');
?>
