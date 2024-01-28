       

        <!-- Barra de navegación -->

        <div class="navbarCabecera">
            <div id="idioma">
                <img src="../img/Logos/bandera.png" alt="bandera de españa">
                <p>Español</p>
            </div>
            <div class="subNavbarCabecera">

                <!-- Carrito de la compra -->
                <a href="realizar_pedido.php">Cesta</a>
                
                  <!-- Si el usuario está logueado, se muestra "Mi cuenta", si no, se muestra "Iniciar sesión" -->

                  <?php
                    if(isset($_SESSION['email'])){
                        echo '<a href="usuario.php">Mi cuenta</a>';
                    }else{
                        echo '<a href="login.php">Bienvenido/a, Iniciar sesión</a>';
                    }
                ?>

                <!-- Enlace al manual de usuario -->

                <a href="../manual/Introduccion.html">Ayuda</a>                
            </div>

        </div>
        <div class="menuCabecera">

            <!-- Botón para desplegar el menu vertical -->

            <div id="menuComp">
                <img src="../img/Fondos/menu_comp.png" alt="menu comprimido" onclick="mostrarMenu()">
            </div>

           <!-- Logo -->

            <img src="../img/Logos/rvr.webp" alt="logo de Footloker">

            <!-- Barra de navegación de categorias que redirigen a la tienda con la categoria dentro de  $_GET['categoria'] -->
            
            <nav id="menuCategorias">
                <a href="../index.php">INICIO</a>
                <a href="tienda.php">TIENDA</a>
                <a href="tienda.php?categoria=sobremesa">SOBREMESAS</a>
                <a href="tienda.php?categoria=monitor">MONITORES</a>
                <a href="tienda.php?categoria=componente">COMPONENTES</a>
                <a href="tienda.php?categoria=periferico">PERIFERICOS</a>
                <a href="tienda.php?categoria=dispositivo-movil">SMARTPHONES</a>
                <a href="tienda.php?categoria=portatil">PORTÁTILES</a>
            </nav>



            <!-- Formulario que redirige a la tienda con un string dentro de $_GET['buscar'] -->

            <div id="botonBuscar">
                <form action="tienda.php" method="GET">
                    <input type="text" name="buscar" placeholder="Buscar...">
                    <button type="submit"><img src="../img/Fondos/lupa.png"></button>
                </form>
            </div>
        </div>

        <!-- Barra de navegación vertical con las categorias para tables y móviles-->

        <nav id="menuCategoriasVertical">
                <a href="../index.php">INICIO</a>
                <a href="tienda.php">TIENDA</a>
                <a href="tienda.php?categoria=sobremesa">SOBREMESAS</a>
                <a href="tienda.php?categoria=monitor">MONITORES</a>
                <a href="tienda.php?categoria=componente">COMPONENTES</a>
                <a href="tienda.php?categoria=periferico">PERIFERICOS</a>
                <a href="tienda.php?categoria=dispositivo-movil">SMARTPHONES</a>
                <a href="tienda.php?categoria=portatil" id = "menuUltimo">PORTÁTILES</a>
        </nav> 
        
        <!-- Script para desplegar el menu -->
        <script src="../scripts/mostrar-menu.js"></script>