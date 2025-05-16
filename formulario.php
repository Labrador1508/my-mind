<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        h1 {
            text-align: center;
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            margin-bottom: 20px;
        }
        td {
            padding: 10px 0;
        }
        label {
            font-weight: bold;
            color: #555;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            color: #333;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
            margin-top: 10px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        input:focus {
            outline: none;
            border-color: #007bff;
        }
    </style>
</head>
<body>

    <form method="post" action="registrar.php">
        <h1>Formulario de Registro</h1>
        <table>
            <tr>
                <td><label for="Nombre">Nombres:</label></td>
                <td><input type="text" name="Nombre" id="Nombre"
                 pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+"
                title="Solo se permiten letras" 
                required /></td>
            </tr>
            <tr>
                <td><label for="Apellidos">Apellidos:</label></td>
                <td><input type="text" name="Apellidos" id="Apellidos" 
                  pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+"
                title="Solo se permiten letras"
                required /></td>
            </tr>
            <tr>
                <td><label for="Correo">Correo:</label></td>
                <td><input type="email" name="Correo" id="Correo" required /></td>
            </tr>
            <tr>
                <td><label for="Contraseña">Contraseña:</label></td>
                <td><input type="password" name="Contraseña" id="password" required /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="guardar" value="Guardar" href="registrar.php" /></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['guardar'])) {
        // Conexión a la base de datos
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "usuarios_db";  // Nombre de la base de datos que creaste

        // Crear conexión
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Recibir los datos del formulario
        $nombre = $_POST['Nombre'];
        $apellidos = $_POST['Apellidos'];
        $correo = $_POST['Correo'];

        // Insertar datos en la base de datos
        $sql = "INSERT INTO usuarios (nombre, apellidos, correo) VALUES ('$nombre', '$apellidos', '$correo')";

        if ($conn->query($sql) === TRUE) {
            echo "Registro exitoso";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>

</body>
</html>
