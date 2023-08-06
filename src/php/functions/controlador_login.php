<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['firstName'];
    $password = $_POST['Contraseña'];

    // Include the database and user classes
    require_once('conexion.php');
    require_once('userClasses.php');

    // Create a database connection
    $db = new DatabaseConnection();
    $conn = $db->getConnection();

    // Create a user object and attempt login
    $user = new User($conn);
    $user_data = $user->login($username, $password);

    if ($user_data) {
        // Successful login, store user data in the session if needed
        $_SESSION['user_id'] = $user_data['id'];
        $_SESSION['username'] = $user_data['username'];
        // Redirect to a dashboard or home page
        header('Location: /pruebahome/index.html');
        exit();
    } else {
        // Invalid login credentials
        echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">';
            echo '<strong class="font-bold">Datos invalidos, intentalo de nuevo!</strong>';
            echo '<span class="block sm:inline"> Por favor, completa todos los campos obligatorios.</span>';
            echo '</div>';
    }
}
?>
