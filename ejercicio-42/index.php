<?php
require 'config.php';

// Crear un nuevo item
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    $stmt = $pdo->prepare("INSERT INTO Items (Nombre) VALUES (:nombre)");
    $stmt->execute(['nombre' => $nombre]);
    header("Location: index.php");
    exit;
}

// Eliminar un item
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $stmt = $pdo->prepare("DELETE FROM Items WHERE Id = :id");
    $stmt->execute(['id' => $id]);
    header("Location: index.php");
    exit;
}

// Leer todos los items
$stmt = $pdo->query("SELECT * FROM Items ORDER BY Id DESC");
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Básico - SQL Server</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        th { background-color: #f4f4f4; }
        form { margin-bottom: 20px; }
    </style>
</head>
<body>
    <h1>CRUD Básico con SQL Server</h1>

    <form method="POST" action="">
        <input type="text" name="nombre" placeholder="Nombre del item" required>
        <button type="submit">Agregar</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $item): ?>
            <tr>
                <td><?= htmlspecialchars($item['Id']) ?></td>
                <td><?= htmlspecialchars($item['Nombre']) ?></td>
                <td>
                    <a href="update.php?id=<?= $item['Id'] ?>">Editar</a>
                    <a href="?delete=<?= $item['Id'] ?>" onclick="return confirm('¿Seguro que deseas eliminar este item?');">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
