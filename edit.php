<?php
include 'config.php';

// Comprobando si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
	$ciudad = $_POST['ciudad'];
	$correo = $_POST['correo'];
	$telefono = $_POST['telefono'];
    $id = $_POST['id'];

    $stmt = $pdo->prepare("UPDATE persona SET nombre = ?, edad = ?, ciudad = ?, correo = ?, telefono = ? WHERE id = ?");
    $stmt->execute([$nombre,$edad,$ciudad,$correo,$telefono, $id]);

    header('Location: index.php');
    exit;
}

$id = $_GET['id'];
$stmt = $pdo->query("SELECT * FROM persona WHERE id = $id");
$persona = $stmt->fetch();

?>

<h2>Editar Persona</h2>

<form action="edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $persona['id']; ?>">
    Nombre: <input type="text" name="nombre" value="<?php echo $persona['nombre']; ?>"><br>
    Edad: <input type="text" name="edad" value="<?php echo $persona['edad']; ?>"><br>
	Ciudad: <input type="text" name="ciudad" value="<?php echo $persona['ciudad']; ?>"><br>
	Correo: <input type="text" name="correo" value="<?php echo $persona['correo']; ?>"><br>
	Telefono: <input type="text" name="telefono" value="<?php echo $persona['telefono']; ?>"><br>
    <input type="submit" value="Guardar Cambios">
</form>
