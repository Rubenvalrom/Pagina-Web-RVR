# RVR
## Introducción

El proyecto final de Base de datos tiene como finalidad la creación de una web conectada a una base de datos SQL para un e-commerce ficticio “RVR” orientado a la venta de artículos tecnológicos. 

## Funcionalidades

### Registro

Permite al usuario crear una cuenta con la que realizar los pedidos. La contraseña es encriptada antes de insertarse en la base de datos. 

### Inicio de sesión

Busca el email en la base de datos y verifica la contraseña con el hash almacenado. 

### Cabecera

Facilita al usuario navegar por la web, contiene enlaces a todas las categorías de los productos, cesta de la compra, manual de usuario, la cuenta y un buscador. 

### Menú desplegable

En tablets y móviles las categorías son sustituidas por un botón con 3 barras que al pulsar las despliega verticalmente. 

#### Buscador

Permite al usuario buscar productos a través de cadenas de texto. 

#### Manual de usuario

Una guía sobre como navegar y utilizar la web. 

### Pie de página

Contiene un enlace a la cuenta del usuario / inicio de sesión, un enlace a Google maps con la ubicación de la tienda y un mini mapa con ella. 

### Catálogo de productos

Muestra una imagen, el nombre y marca de los productos en la base de datos con o sin filtrado previo. 

Los resultados se filtran a través del método GET, muestra los productos pertenecientes a una categoría o los productos cuyo y/o descripción contienen la cadena de texto enviada a través del buscador de la cabecera. 

### Producto 

Muestra una imagen mediana, nombre, marca, precio, descripción y unidades en stock. 

#### Carrito

Permite añadir o quitar unidades del producto a la cesta. 

Indica las el número de unidades que se han introducido con su coste total. Incluye un botón para eliminar todas las unidades seleccionadas del producto. 

#### Imagen

Al hacer click en la imagen se oscurece el fondo y se muestra en el centro una imagen con mayor resolución. 

Nota: Debido al tamaño de la mayoría de imágenes almacenadas (300 x 300) se aprecia mejor el efecto es en los productos pertenecientes a la categoría “smartphones”. 

### Cesta

Aquí se muestran todos los productos que el usuario a añadido junto a su cantidad y precio. 

A través de un botón se confirma y realiza el pedido. 

#### Alterar 

Puedes quitar 1 o todas las unidades de un producto a través de botones a la derecha 

### Cuenta 

#### Usuario

Muestra el nombre, apellidos e email del cliente. 

Un botón para cerrar sesión y otro para eliminar la cuenta (se borra de la tabla usuarios, pero no afecta al resto) 

#### Pedidos realizados

Muestra la id, fecha y estado de todos los pedidos realizados. Contienen un botón para ver más detalles del pedido. 

### Información de pedido 

Muestran su id, los productos que contienen, precio del producto, la cantidad y el coste total.  

## Base de datos

![](img/readme/Aspose.Words.e0ccc95c-3304-4fff-ac4d-04c6e63ac249.010.jpeg)

## Programación

### Lenguajes

HTML, CSS, JavaScript y PHP 

### Librerías y Frameworks

Bootstrap y Ajax
