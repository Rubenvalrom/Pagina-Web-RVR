<?php
    session_start();

    // Si no hay sesión iniciada, redirige a index.php

    if (!isset($_SESSION['email'])) {
        header('Location: ../index.php');
    }

    // Variables de sesión

    $email = $_SESSION['email'];

    // Incluye la conexión con la base de datos y las funciones

    include_once '../includes/funciones_sql.php';

    // se buscan los datos del usuario y sus pedidos

    $usuario = buscarUsuario($pdo, $email);

    $nombre = $usuario['nombre'];
    $apellidos = $usuario['apellidos'];

    $pedidos = buscarPedidos($pdo, $email);


?>
<!DOCTYPE html>
<html>
<head>
    <title>Tu Cuenta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<?php include_once '../includes/cabecera.php'; ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <!-- Información del usuario -->

                    <h1>Información del Usuario</h1>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Email:</h5>
                            <p class="card-text"><?php echo $email; ?></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Nombre:</h5>
                            <p class="card-text"><?php echo $nombre; ?></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Apellidos:</h5>
                            <p class="card-text"><?php echo $apellidos; ?></p>
                        </div>
                    </div>
                </div>

                <!-- Pedidos del usuario -->

                <div class="col-md-6">
                    <div class="card" style="margin-top: 4em;">
                        <div class="card-body">
                            <h5 class="card-title">Pedidos:</h5>
                            <?php
                            foreach ($pedidos as $pedido) {?>
                              
                                <?php
                                echo "<p>ID del pedido: <b>" . $pedido['id'] . "</b></p>";
                                echo "<p>Fecha: " . $pedido['fecha'] . "</p>";
                                echo "<p>Estado: " . $pedido['estado'] . "</p>";
                                ?>
                                  <form action="pedido.php" method="POST">
                                    <input type="hidden" name="id_pedido" value="<?php echo $pedido['id']; ?>">
                                    <button type="submit" class="btn btn-primary boton-verde">Ver Pedido</button>
                                </form>
                                <hr>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Botones para cerrar sesión y borrar usuario -->
            
            <div id="botonesUsuario">
                <button id="cerrarSesion" class="btn btn-primary" onclick="window.location.href='../scripts/cerrar_sesion.php'">Cerrar Sesión</button>
                <button id="borrarUsuario" class="btn btn-danger" onclick="confirmarDelete()">Borrar Usuario</button>
                
                <!-- Script para confirmar el borrado del usuario -->
                <script src="../scripts/confirmar_delete.js"></script>
            </div>
        </div>
     
        </div>
    </div>
</main> 
<?php include_once '../includes/footer.html'; ?>     
</body>
</html>
