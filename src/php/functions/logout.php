<?php

session_start();

session_destroy();

header('Location:../pruebahome/index.php');

exit;
?>