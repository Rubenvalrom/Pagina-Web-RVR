<?php
session_start();

// Si el usuario no ha iniciado sesión, se redirige a login.php

if (!isset($_SESSION['email'])){
    header('Location: ../pages/login.php');
}

// Si existe se introduce en una variable

$email = $_SESSION['email'];

// Se incluye la conexión con la base de datos y las funciones

include_once '../includes/funciones_sql.php';

// Busco el id_usuario en la base de datos

$sql_id_usuario = buscarIdUsuario($pdo, $email);
$id_usuario = $sql_id_usuario['id_usuario'];

// Se borra el usuario de la base de datos

if (!borrarUsuario($pdo, $id_usuario)) {
    unset($_SESSION['email']);
    unset($_SESSION['carrito']);
    header('Location: ../pages/login.php');

// Se lanza un mensaje de error si el usuario no se borra correctamente
} else {
    
    echo "Error al borrar el usuario";
}
