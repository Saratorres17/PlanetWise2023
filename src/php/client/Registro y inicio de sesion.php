<?php
include "../functions/conexion.php";

if (!empty($_POST["registrar"])) {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $genero = $_POST["genero"];
    $fechana = $_POST["fecha_nacimiento"];
    $password = $_POST["contraseña"];
    $sql = "INSERT INTO `registro del usuario`(`Nombre`, `Apellido`, `Genero`, `Fecha de nacimiento`, `Contraseña`) VALUES ('$nombre', '$apellido','$genero','$fechana','$password')";
    mysqli_query($conn, $sql);
  }

if (!empty($_POST["loginsubmit"])) {
    session_start();
    if (!empty($_POST["usuario"]) && !empty($_POST["password"])) {
        $usuario=$_POST["loginame"];
        $password=$_POST["loginpass"];
        $sql=$conn->query("Select * from registro del usuario where `Nombre`= '$usuario' and `Contraseña` = '$password'");
    }
    else{
        echo "Campos vacios";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/dist/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../Imagenes/leaf.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Registro</title>
</head>

<body>
    <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
                <h2>¡Bienvenidos a PlanetWise!</h2>
                <p>Si ya tienes una cuenta, por favor inicia sesion aqui.</p>
                <button class="sign-up-btn">Iniciar Sesion</button>
            </div>
        </div>
    

        <form class="formulario" method="post"> 
    
            <div><img width="30%" src="../Imagenes/leaf.png" class="iconleft" alt="iconleft"></div>
            <h2 class="create-account">¡Crea una cuenta!</h2>
            <div class="iconos">
                <div class="border-icon">
                    <i class='bx bxl-instagram'></i>
                </div>
                
                <div class="border-icon">
                    <i class='bx bxl-facebook-circle' ></i>
                </div>
            </div>
            <p class="cuenta-gratis">Crea una cuenta gratis y sumergete en el increible mundo de la biodiversidad!</p>
            <input type="text" name="nombre" placeholder="Nombre:">
            <input type="text" name="apellido" placeholder="Apellido:">
            <input type="text" name="genero" placeholder="Genero:">
             <input type="text" name="fecha_nacimiento" placeholder="Fecha de nacimiento:">
             <input type="password" name="contraseña" placeholder="Contraseña:">
             <input type="submit" name="registrar" value="Registrarse">
        </form>
    </div>
    <div class="container-form sign-in">
        
        <form class="formulario">
            <div><img width="30%" src="../Imagenes/leaf.png" class="iconleft1" alt="iconleft1"></div>
            <h2 class="create-account">¡Iniciar Sesion!</h2>
            <div class="iconos">
                <div class="border-icon">
                    <i class='bx bxl-instagram'></i>
                </div>
               
                <div class="border-icon">
                    <i class='bx bxl-facebook-circle' ></i>
                </div>
            </div>
            <p class="cuenta-gratis">¿Aun no tienes una cuenta?</p>
            <input type="text" name="loginame" placeholder="Nombre:">
            <input type="password" name="loginpass" placeholder="Contraseña:">
            <input type="submit" name="loginsubmit" value="Iniciar Sesion">
        </form>
        <div class="welcome-back">
            <div class="message">
                <h2>¡Bienvenido de nuevo!</h2>
                <p>Si aún no tienes una cuenta, por favor registrese aqui.</p>
                <button class="sign-in-btn">Registrarse</button>
            </div>
        </div>
    </div>
    <script src="/src/js/script.js"></script>
</body>

</html>