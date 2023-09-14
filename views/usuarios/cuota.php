<link rel="stylesheet" href="./assets/css/cuotas.css">
<div class="container">
        <h1>Descarga de Recibo de Cuenta de Administración</h1>
        <form action="descargar_recibo.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" required>

            <label for="documento">Documento:</label>
            <input type="text" id="documento" name="documento" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

            <button type="submit">Descargar Recibo</button>
        </form>
    </div>
    <div class="recibo">
        <h2 class="titulo">Recibo de Cuota de Administración</h2>
        <div class="datos">
            <?php
            // Recuperar los datos del formulario
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $documento = $_POST['documento'];
            $email = $_POST['email'];

            // Generar el recibo
            echo "<p><strong>Nombre: Jose Carlos</strong> $Jose</p> ";
            echo "<p><strong>Apellidos: Rosellon Lozano</strong> $apellidos</p>";
            echo "<p><strong>Documento: 1234567890</strong> $documento</p>";
            echo "<p><strong>Correo Electrónico: jose@gmail.com</strong> $email</p>";
            echo "<p><strong>Fecha:</strong> " . date('d/m/Y') . "</p>";
            echo "<p><strong>Monto a Pagar:</strong> $100.000</p>"; // Puedes cambiar el monto según tus necesidades.
            ?>
        </div>
    </div>