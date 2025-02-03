<!-- views/agregar_evento.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
    <!-- Incluye Bootstrap para los estilos -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/styles_form.css">
</head>

<body>
    <div class="container mt-4 mb-4">

        <h1 class="titulo-principal mt-3 mb-3">Gestión de Eventos</h1>

        <div class="mt-4 mb-4">

            <h3 class="titulo-secundario">Nuevo Evento</h3>

            <!-- Formulario para agregar un nuevo evento -->
            <form action="index.php?action=guardar" method="POST">

                <!-- Campos para ingresar los datos de nuevo evento -->
                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" name="titulo" id="titulo" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="fecha">Fecha</label>
                    <input type="date" name="fecha" id="fecha" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="hora">Hora</label>
                    <input type="time" name="hora" id="hora" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <input type="text" name="categoria" id="categoria" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="lugar">Lugar</label>
                    <input type="text" name="lugar" id="lugar" class="form-control" required>
                </div>

                <div class="d-flex justify-content-end mt-3 mb-3">
                    <!-- Botón para enviar el formulario y guardar el evento -->
                    <button type="submit" class="btn btn-custom">Guardar</button>
                    <!-- Botón para cancelar y regresar a la lista de eventos -->
                    <a href="index.php" class="btn btn-custom">Cancelar</a>
                </div>

            </form>

        </div>

    </div>
</body>

</html>
