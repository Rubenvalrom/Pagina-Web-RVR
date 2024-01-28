***RVR***
<a name="_page3_x77.00_y51.04"></a>**Introducción**

El proyecto final de Base de datos tiene como finalidad la creación de una web conectada a una base de datos SQL para un e-commerce ficticio “RVR” orientado a la venta de artículos tecnológicos. 

<a name="_page3_x77.00_y202.04"></a>**Funcionalidades** 

<a name="_page3_x77.00_y254.04"></a>**Registro** 

Permite al usuario crear una cuenta con la que realizar los pedidos. La contraseña es encriptada antes de insertarse en la base de datos. 

<a name="_page3_x77.00_y359.04"></a>**Inicio de sesión** 

Busca el email en la base de datos y verifica la contraseña con el hash almacenado. 

<a name="_page3_x77.00_y443.04"></a>**Cabecera** 

Facilita al usuario navegar por la web, contiene enlaces a todas las categorías de los productos, cesta de la compra, manual de usuario, la cuenta y un buscador. 

<a name="_page3_x77.00_y542.04"></a>**Menú desplegable** 

En tablets y móviles las categorías son sustituidas por un botón con 3 barras que al pulsar las despliega verticalmente. 

<a name="_page3_x77.00_y618.04"></a>**Buscador** 

Permite al usuario buscar productos a través de cadenas de texto. 

<a name="_page3_x77.00_y680.04"></a>**Manual de usuario** 

Una guía sobre como navegar y utilizar la web. 

<a name="_page4_x77.00_y51.04"></a>**Pie de página** 

Contiene un enlace a la cuenta del usuario / inicio de sesión, un enlace a Google maps con la ubicación de la tienda y un mini mapa con ella. 

<a name="_page4_x77.00_y130.04"></a>**Catálogo de productos** 

Muestra una imagen, el nombre y marca de los productos en la base de datos con o sin filtrado previo. 

Los resultados se filtran a través del método GET, muestra los productos pertenecientes a una categoría o los productos cuyo y/o descripción contienen la cadena de texto enviada a través del buscador de la cabecera. 

<a name="_page4_x77.00_y278.04"></a>**Producto** 

Muestra una imagen mediana, nombre, marca, precio, descripción y unidades en stock. 

<a name="_page4_x77.00_y363.04"></a>**Carrito**  

Permite añadir o quitar unidades del producto a la cesta. 

Indica las el número de unidades que se han introducido con su coste total. Incluye un botón para eliminar todas las unidades seleccionadas del producto. 

<a name="_page4_x77.00_y465.04"></a>**Imagen** 

Al hacer click en la imagen se oscurece el fondo y se muestra en el centro una imagen con mayor resolución. 

Nota: Debido al tamaño de la mayoría de imágenes almacenadas (300 x 300) se aprecia mejor el efecto es en los productos pertenecientes a la categoría “smartphones”. 

<a name="_page4_x77.00_y597.04"></a>**Cesta** 

Aquí se muestran todos los productos que el usuario a añadido junto a su cantidad y precio. 

A través de un botón se confirma y realiza el pedido. 

<a name="_page4_x77.00_y717.04"></a>**Alterar** 

Puedes quitar 1 o todas las unidades de un producto a través de botones a la derecha 

<a name="_page4_x77.00_y778.04"></a>**Cuenta** 

<a name="_page5_x77.00_y51.04"></a>**Usuario** 

Muestra el nombre, apellidos e email del cliente. 

Un botón para cerrar sesión y otro para eliminar la cuenta (se borra de la tabla usuarios, pero no afecta al resto) 

<a name="_page5_x77.00_y148.04"></a>**Pedidos** 

Muestra la id, fecha y estado de todos los pedidos realizados. Contienen un botón para ver más detalles del pedido. 

<a name="_page5_x77.00_y230.04"></a>**Pedido** 

Muestran su id, los productos que contienen, precio del producto, la cantidad y el coste total.  

<a name="_page5_x77.00_y349.04"></a>**Base de datos** 

![](img/readme/Aspose.Words.e0ccc95c-3304-4fff-ac4d-04c6e63ac249.010.jpeg)

<a name="_page6_x77.00_y92.04"></a>**Programación** 

<a name="_page6_x77.00_y146.04"></a>**Lenguajes** 

HTML, CSS, JavaScript y PHP 

<a name="_page6_x77.00_y230.04"></a>**Librerías y Frameworks** 

Bootstrap y Ajax
