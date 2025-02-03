<?php
// views/lista_eventos.php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Eventos</title>
    <!-- Importa el archivo CSS de Bootstrap desde CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Importa los estilos -->
    <link rel="stylesheet" href="./styles/styles.css">
</head>

<body>
    <div class="container mt-4 mb-3">

        <h1 class="titulo-principal mt-3 mb-3">Gestión de Eventos</h1>

        <div class="mt-4 mb-4">

            <h3 class="titulo-secundario">Todos los Eventos</h3>

            <div class="mt-4 mb-4">
                <!-- Bucle para recorrer los eventos almacenados -->
                <?php foreach ($eventos as $evento): ?>
                    <div class="card mt-4 mb-4">
                        <div class="card-body">
                            <!-- Título del evento -->
                            <h5 class="card-title"><?= htmlspecialchars($evento['titulo']) ?></h5>

                            <!-- Información del evento -->
                            <p class="card-text">
                                <strong>Descripción:</strong> <?= htmlspecialchars($evento['descripcion']) ?><br>
                                <strong>Categoría:</strong> <?= htmlspecialchars($evento['categoria']) ?><br>
                                <strong>Lugar:</strong> <?= htmlspecialchars($evento['lugar']) ?>
                            </p>

                            <!-- Fecha y hora -->
                            <p class="card-text">
                                <small class="text-muted">
                                    Fecha: <?= htmlspecialchars($evento['fecha']) ?> | Hora: <?= htmlspecialchars($evento['hora']) ?>
                                </small>
                            </p>

                            <div class="d-flex justify-content-end mt-3 mb-3">
                                <!-- Botones de acción -->
                                <a href="index.php?action=editar&id=<?= htmlspecialchars($evento['id']) ?>" class="btn btn-custom">Editar</a>
                                <a href="index.php?action=eliminar&id=<?= htmlspecialchars($evento['id']) ?>" class="btn btn-custom">Eliminar</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="d-flex justify-content-end mt-3 mb-3">
                <!-- Botón para agregar un nuevo evento -->
                <a href="index.php?action=agregar" class="btn btn-custom btn-float">Nuevo</a>
            </div>

        </div>

    </div>
</body>

</html>
