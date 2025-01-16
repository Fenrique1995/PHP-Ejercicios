<?php
//36-Crear una lista de tareas con una sesión de PHP.

// Iniciar la sesión
session_start();

// Inicializar la lista de tareas si no existe
if (!isset($_SESSION['tareas'])) {
    $_SESSION['tareas'] = [];
}

// Manejo de formulario para agregar tareas
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nueva_tarea'])) {
    $tarea = trim($_POST['nueva_tarea']);
    if (!empty($tarea)) {
        $_SESSION['tareas'][] = $tarea; // Agregar tarea a la sesión
    }
}

// Manejo de eliminar tareas
if (isset($_GET['eliminar'])) {
    $indice = $_GET['eliminar'];
    if (isset($_SESSION['tareas'][$indice])) {
        unset($_SESSION['tareas'][$indice]); // Eliminar la tarea
        $_SESSION['tareas'] = array_values($_SESSION['tareas']); // Reindexar el arreglo
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .tarea { margin: 5px 0; }
        .eliminar { color: red; text-decoration: none; margin-left: 10px; }
    </style>
</head>
<body>
    <h1>Lista de Tareas</h1>

    <!-- Formulario para agregar nuevas tareas -->
    <form method="POST">
        <input type="text" name="nueva_tarea" placeholder="Nueva tarea" required>
        <button type="submit">Agregar</button>
    </form>

    <!-- Mostrar la lista de tareas -->
    <h2>Tareas:</h2>
    <?php if (!empty($_SESSION['tareas'])): ?>
        <ul>
            <?php foreach ($_SESSION['tareas'] as $indice => $tarea): ?>
                <li class="tarea">
                    <?php echo htmlspecialchars($tarea); ?>
                    <a href="?eliminar=<?php echo $indice; ?>" class="eliminar">Eliminar</a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No hay tareas en la lista.</p>
    <?php endif; ?>
</body>
</html>
