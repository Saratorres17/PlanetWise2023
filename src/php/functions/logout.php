<?php

session_start();

session_destroy();

header('Location: /pruebahome/PaginaPrincipal.php');

exit;
?>