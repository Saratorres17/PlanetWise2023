<?php

session_start();

session_destroy();

header('Location: /pruebahome/pagina principal1.php');

exit;
?>