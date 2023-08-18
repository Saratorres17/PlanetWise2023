<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['firstName'];
    $password = $_POST['Contraseña'];

    // Include the database and user classes
    require_once('conexion.php');
    require_once('userClasses.php');
    require_once('adminClasses.php');

    // Create a database connection
    $db = new DatabaseConnection();
    $conn = $db->getConnection();

    
    $user = new User($conn);
    $user_data = $user->login($username, $password);

    $admin = new Admin($conn);
    $admin_data = $admin ->login($username, $password);

    if ($user_data) {
        $_SESSION['user_id'] = $user_data['id'];
        $_SESSION['firstName'] = $user_data['firstName'];
        $_SESSION['photo_path'] = $user_data['foto_path'];
        $_SESSION['gustos'] = $user_data['interests'];
        $_SESSION['gender'] = $user_data['gender'];
        $_SESSION['correo'] = $user_data['email'];


        header('Location: /pruebahome/index.php');
        exit();
    }else if($admin_data){
        $_SESSION['admin_id'] = $admin_data['id'];
        $_SESSION['firstName'] = $admin_data['firstName'];
        $_SESSION['foto_path'] = $admin_data['foto_path'];
        header( 'Location: /src/php/admin/Dasboard adm.php');
    } 
    else{
        // Invalid login credentials
        echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">';
            echo '<strong class="font-bold">Datos invalidos, intentalo de nuevo!</strong>';
            echo '<span class="block sm:inline"> Por favor, completa todos los campos obligatorios.</span>';
            echo '</div>';
    }
}
?>
