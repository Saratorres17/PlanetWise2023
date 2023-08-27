<?php
include("../functions/conexion.php");
include("../functions/adminClasses.php");

session_start();

$database = new DatabaseConnection();
$pdo = $database->getConnection();

// Consulta para obtener los datos de los usuarios
$query = "SELECT * FROM registroinformacion1";
$stmt = $pdo->prepare($query);
$stmt->execute();
$publicaciones = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/dist/images/leaf.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="fixed bg-gray-800 text-white w-1/5 py-10 px-6 h-screen bg-sidebar-image">
            <div class="flex items-center mb-8">
                <img src=<?php echo $_SESSION['foto_path'] ?> alt="Admin Profile" class="w-fit h-10 rounded-full mr-2">
                <span class="text-lg font-semibold"><?php echo $_SESSION['firstName']; ?></span>
            </div>
            <ul class="space-y-2">
                <li><a href="/src/php/admin/Dasboard adm.php" class="block py-2 px-4 hover:bg-gray-700">Usuarios</a></li>
                <li><a href="/src/php/admin/Dashboard- Publicaciones.php" class="block py-2 px-4 hover:bg-gray-700">Publicaciones</a></li>
                <li><a href="/src/php/admin/curiosidades1.php" class="block py-2 px-4 hover:bg-gray-700">Datos curiosos</a></li>
                <li><a href="/src/php/functions/close_session.php" class="block py-2 px-4 hover:bg-gray-700">Cerrar sesion</a></li>
                <!-- Sidebar -->
            </ul>
        </div>
        <div class="ml-72">
            <!-- cards adm -->
            <div class="scroll bg-white-200 bg-opacity-70">
                    <div class="scroll mt-6 md:flex space-x-6">
                        <?php foreach ($publicaciones as $publicacion) : ?>
                            <div>
                                <img src="<?php echo "http://localhost/src/php/functions/" . $publicacion['foto_path']; ?>" alt="">
                                <div>
                                    <b><?php echo $publicacion['usuarioId'] ?></b>
                                    <h1 class="mt-3 text-gray-400 text-2xl font-bold my-2"><?php echo $publicacion['titulo'] ?></h1>
                                    <p class="text-gray-500 mb-2"><?php echo $publicacion['descripcion'] ?></p>
                                    <p class="text-gray-500 mb-2"><?php echo $publicacion['informacion'] ?></p>
                                    <div class="flex justify-between mt-4">
                                        <span class="font-thin text-gray-400 text-sm"><?php echo $publicacion['fecha_registro'] ?></span><br>
                                    </div>
                                </div>
                                <div class="flex justify-evenly">
                                    <a href="/pruebahome/pagina-dePubBlog.php?id=<?php echo $publicacion["id"] ?>"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" id="Layer_1" width="30px" height="60px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                                            <g>
                                                <path fill="#231F20" d="M24.008,32.038L9.541,27.904c-0.527-0.146-1.084,0.155-1.236,0.688c-0.151,0.53,0.156,1.084,0.688,1.236   l14.467,4.134C23.551,33.987,23.643,34,23.734,34c0.435,0,0.835-0.286,0.961-0.726C24.847,32.744,24.539,32.19,24.008,32.038z" />
                                                <path fill="#231F20" d="M24.008,39.038L9.541,34.905c-0.527-0.146-1.084,0.155-1.236,0.688c-0.151,0.531,0.156,1.084,0.688,1.236   l14.467,4.133C23.551,40.987,23.643,41,23.734,41c0.435,0,0.835-0.286,0.961-0.726C24.847,39.743,24.539,39.19,24.008,39.038z" />
                                                <path fill="#231F20" d="M24.008,25.038L9.541,20.904c-0.527-0.146-1.084,0.155-1.236,0.688c-0.151,0.53,0.156,1.084,0.688,1.236   l14.467,4.134C23.551,26.987,23.643,27,23.734,27c0.435,0,0.835-0.286,0.961-0.726C24.847,25.744,24.539,25.19,24.008,25.038z" />
                                                <path fill="#231F20" d="M24.008,18.038L9.541,13.904c-0.527-0.146-1.084,0.155-1.236,0.688c-0.151,0.53,0.156,1.084,0.688,1.236   l14.467,4.134C23.551,19.987,23.643,20,23.734,20c0.435,0,0.835-0.286,0.961-0.726C24.847,18.744,24.539,18.19,24.008,18.038z" />
                                                <path fill="#231F20" d="M39.963,33.962c0.092,0,0.184-0.013,0.275-0.038l14.467-4.134c0.531-0.152,0.839-0.706,0.688-1.236   c-0.152-0.532-0.708-0.832-1.236-0.688L39.689,32c-0.531,0.152-0.839,0.706-0.688,1.236C39.128,33.676,39.528,33.962,39.963,33.962   z" />
                                                <path fill="#231F20" d="M54.459,34.905l-14.467,4.133c-0.531,0.152-0.839,0.705-0.688,1.236C39.431,40.714,39.831,41,40.266,41   c0.092,0,0.184-0.013,0.275-0.038l14.467-4.133c0.531-0.152,0.839-0.705,0.688-1.236C55.543,35.061,54.987,34.761,54.459,34.905z" />
                                                <path fill="#231F20" d="M54.459,20.904l-14.467,4.134c-0.531,0.152-0.839,0.706-0.688,1.236C39.431,26.714,39.831,27,40.266,27   c0.092,0,0.184-0.013,0.275-0.038l14.467-4.134c0.531-0.152,0.839-0.706,0.688-1.236C55.543,21.06,54.987,20.758,54.459,20.904z" />
                                                <path fill="#231F20" d="M54.459,13.904l-14.467,4.134c-0.531,0.152-0.839,0.706-0.688,1.236C39.431,19.714,39.831,20,40.266,20   c0.092,0,0.184-0.013,0.275-0.038l14.467-4.134c0.531-0.152,0.839-0.706,0.688-1.236C55.543,14.06,54.987,13.76,54.459,13.904z" />
                                                <path fill="#231F20" d="M63.219,0.414c-0.354-0.271-0.784-0.413-1.221-0.413c-0.172,0-0.345,0.022-0.514,0.066L32,7.93L2.516,0.067   c-0.17-0.045-0.343-0.066-0.515-0.066c-0.437,0-0.866,0.142-1.22,0.413C0.289,0.793,0,1.379,0,2v49.999   c0,0.906,0.609,1.699,1.484,1.933l25.873,6.899C28.089,62.685,29.887,64,32,64s3.911-1.315,4.643-3.169l25.873-6.899   C63.391,53.698,64,52.905,64,51.999V2C64,1.379,63.711,0.793,63.219,0.414z M32,54c0.173,0,0.347-0.022,0.516-0.067L62,46.07v1.954   l-30,7.941L2,48.024V46.07l29.484,7.862C31.653,53.978,31.827,54,32,54z M1.998,2.001c0,0,0.001,0,0.003,0V2L31,9.733v42L2,44   L1.998,2.001z M34.979,59.205c-0.079,1.143-0.785,2.111-1.788,2.546l-0.676,0.181c-0.169,0.045-0.343,0.067-0.516,0.067   s-0.347-0.022-0.516-0.067l-0.676-0.181c-1.003-0.435-1.709-1.403-1.788-2.546L2,51.999v-1.906l29.744,7.874   C31.828,57.989,31.914,58,32,58s0.172-0.011,0.256-0.033L62,50.093v1.906L34.979,59.205z M33,51.733v-42L62,2v42L33,51.733z" />
                                            </g>
                                        </svg></a>

                                    <a href="/src/php/admin/deletePost.php?id=<?php echo $publicacion["id"] ?>"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="60px" viewBox="0 0 76 76" version="1.1" baseProfile="full" enable-background="new 0 0 76.00 76.00" xml:space="preserve">
                                            <path fill="#000000" fill-opacity="1" stroke-width="0.2" stroke-linejoin="round" d="M 25.3333,23.75L 50.6667,23.75C 51.5411,23.75 51.8541,27.3125 51.8541,27.3125L 24.1458,27.3125C 24.1458,27.3125 24.4589,23.75 25.3333,23.75 Z M 35.625,19.7917L 40.375,19.7917C 40.8122,19.7917 41.9583,20.9378 41.9583,21.375C 41.9583,21.8122 40.8122,22.9584 40.375,22.9584L 35.625,22.9584C 35.1878,22.9584 34.0416,21.8122 34.0416,21.375C 34.0416,20.9378 35.1878,19.7917 35.625,19.7917 Z M 27.7083,28.5L 48.2916,28.5C 49.1661,28.5 49.875,29.2089 49.875,30.0834L 48.2916,53.8334C 48.2916,54.7078 47.5828,55.4167 46.7083,55.4167L 29.2917,55.4167C 28.4172,55.4167 27.7083,54.7078 27.7083,53.8334L 26.125,30.0834C 26.125,29.2089 26.8339,28.5 27.7083,28.5 Z M 30.0833,31.6667L 30.4792,52.25L 33.25,52.25L 32.8542,31.6667L 30.0833,31.6667 Z M 36.4167,31.6667L 36.4167,52.25L 39.5833,52.25L 39.5833,31.6667L 36.4167,31.6667 Z M 43.1458,31.6667L 42.75,52.25L 45.5208,52.25L 45.9167,31.6667L 43.1458,31.6667 Z " />
                                        </svg></a>
                                </div><br>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </main><br><br>

            </div>
        </div> <!-- cards adm -->
    </div>
</body>

</html>