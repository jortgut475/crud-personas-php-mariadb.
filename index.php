<?php
include 'config.php';

$stmt = $pdo->query('SELECT * FROM persona');
$persona = $stmt->fetchAll();
?>

<h2>Listado de Personas</h2>

<!-- Botón para crear una nueva persona -->
<a href="create.php">Crear nueva Persona</a>
<br><br>

<table border="1">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Ciudad</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($persona as $persona): ?>
            <tr>
                <td><?php echo $persona['nombre']; ?></td>
                <td><?php echo $persona['edad']; ?></td>
                <td><?php echo $persona['ciudad']; ?></td>
                <td><?php echo $persona['correo']; ?></td>
                <td><?php echo $persona['telefono']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $persona['id']; ?>"><button type="button">Editar</button>
                    <a href="delete.php?id=<?php echo $persona['id']; ?>"><button type="button">Eliminar</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
