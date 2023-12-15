<?php
include 'config.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $ciudad = $_POST['ciudad'];
    $correo = $_POST['correo'];
	$telefono = $_POST['telefono'];

    try {
        $sql = "INSERT INTO persona (nombre,edad,ciudad,correo,telefono) VALUES (:nombre,:edad ,:ciudad, :correo, :telefono)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['nombre' => $nombre, 'edad' => $edad, 'ciudad' => $ciudad, 'correo' => $correo, 'telefono'=>$telefono]);

        $message = 'persona añadida con éxito!';
    } catch (PDOException $e) {
        $message = 'Error al añadir la persona: ' . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir persona</title>
</head>
<body>
<h2>Añadir nueva persona</h2>

<?php if (!empty($message)): ?>
    <p><?= $message ?></p>
<?php endif; ?>

<form action="create.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>
    <br>
    <label for="edad">Edad:</label>
    <input type="text" name="edad" id="edad" required>
    <br>
    <label for="ciudad">Ciudad:</label>
    <input type="text" name="ciudad" id="ciudad" required>
    <br>
    <label for="correo">Correo:</label>
    <input type="text" name="correo" id="correo" required>
    <br>
	<label for="telefono">Telefono:</label>
    <input type="text" name="telefono" id="telefono" required>
    <br>
    <input type="submit" value="Añadir Persona">
</form>

</body>
</html>
