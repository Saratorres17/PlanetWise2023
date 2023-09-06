<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal de Reporte</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <!-- Modal -->
    <div id="reportModal" class="modal bg-cover bg-center fixed inset-0 flex items-center justify-center z-50" style="background-image: url('https://img.freepik.com/foto-gratis/nado-tortugas-marinas-peligro-extincion-maui-generado-ia_188544-37157.jpg?w=1380&t=st=1693976148~exp=1693976748~hmac=1021c889c37a107fc1b9c0aeb52077b94a53fbb793c42b27004aba1b3f96e6f4');">
        <div class="modal-content bg-white w-1/3 p-4 rounded shadow-lg">
            
            <h2 class="text-2xl font-semibold mb-4">Reportar publicacion </h2>
            <textarea id="reportReason" class="w-full h-32 border rounded p-2 focus:outline-none focus:ring focus:border-blue-500" placeholder="Indique el motivo de su reporte"></textarea>
            <a href="/pruebahome/blog.php"><div class="mt-4">
                <button id="submitReportBtn" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Enviar Reporte</button>
            </div></a>
        </div>
    </div>

    <script>
        // JavaScript para mostrar el modal automáticamente
        const reportModal = document.getElementById("reportModal");
    

        reportModal.classList.remove("hidden");

        closeModalBtn.addEventListener("click", () => {
            reportModal.classList.add("hidden");
        });

       
        const submitReportBtn = document.getElementById("submitReportBtn");
        const reportReason = document.getElementById("reportReason");

        submitReportBtn.addEventListener("click", () => {
            const reason = reportReason.value;
            reportModal.classList.add("hidden");
        });
    </script>
</body>
</html>
