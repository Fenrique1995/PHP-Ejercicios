<?php
require 'config.php';

// Obtener el item por ID
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM Items WHERE Id = :id");
    $stmt->execute(['id' => $id]);
    $item = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$item) {
        die("Item no encontrado.");
    }
}

// Actualizar el item
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $stmt = $pdo->prepare("UPDATE Items SET Nombre = :nombre WHERE Id = :id");
    $stmt->execute(['nombre' => $nombre, 'id' => $id]);
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Item</title>
</head>
<body>
    <h1>Editar Item</h1>

    <form method="POST" action="">
        <input type="hidden" name="id" value="<?= htmlspecialchars($item['Id']) ?>">
        <input type="text" name="nombre" value="<?= htmlspecialchars($item['Nombre']) ?>" required>
        <button type="submit">Guardar Cambios</button>
    </form>

    <a href="index.php">Volver</a>
</body>
</html>
