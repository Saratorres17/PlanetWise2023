<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "planetwise";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Conexión falida: " . mysqli_connect_error());
}
// echo "Connected successfully";


if (isset($_POST["submit"])) {
   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $email = $_POST['email'];
   $contra = $_POST['contra'];
   $gender = $_POST['gender'];

   $sql = "INSERT INTO `crud`(`id`, `first_name`, `last_name`, `email`,`contra`, `gender`) VALUES (NULL,'$first_name','$last_name','$email', '$contra','$gender')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=Nuevo registro creado con éxito");
   } else {
      echo "Error: " . mysqli_error($conn);
   }
}

?>




<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>PHP CRUD</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      <a href="">PlanetWise CRUD</a>
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Agregar nuevo usuario</h3>
         <p class="text-muted">Rellene el siguiente formulario para añadir un nuevo usuario</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Primer nombre:</label>
                  <input type="text" class="form-control" name="first_name" placeholder="Albert">
               </div>

               <div class="col">
                  <label class="form-label">Último nombre:</label>
                  <input type="text" class="form-control" name="last_name" placeholder="Einstein">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Email:</label>
               <input type="email" class="form-control" name="email" placeholder="nombre@ejemplo.com">
            </div>
            <div class="mb-3">
               <label class="form-label">Contraseña:</label>
               <input type="password" class="form-control" name="contra" placeholder="Contraseña">
            </div>

            <div class="form-group mb-3">
               <label>Género:</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="gender" id="male" value="Masculino">
               <label for="male" class="form-input-label">Masculino</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="gender" id="female" value="Femenino">
               <label for="female" class="form-input-label">Femenino</label>
            </div>

            <div>
               <button type="submit" class="btn btn-success" name="submit">Guardar</button>
               <a href="index.php" class="btn btn-danger">Cancelar</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>