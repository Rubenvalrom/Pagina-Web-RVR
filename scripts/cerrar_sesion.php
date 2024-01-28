<?php
// Destruye la sesión y redirige al index
session_start();
session_destroy();
header('Location: ../index.php');