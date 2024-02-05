<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Personaje</title>
    <!-- Bootstrap 5 (CSS) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-d3m9oDum3iF0+K1xJJKbTxhkez24FZVgpUJf+1kWg3Iwad6Dd2JKCmsBt7UnwX3Z" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h2>Agregar Personaje</h2>
        <!-- Formulario para agregar un personaje -->
        <form action="<?= site_url('marvel/agregar') ?>" method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion/label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="imagen" class="form-label">URL de la Imagen</label>
                <input type="url" class="form-control" id="imagen" name="imagen" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>

    <!-- Bootstrap 5 (JS) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-GLhlTQ8iKPEZL+u8/At4uRU6BabQ8M3pPbT6LZd5qlIu5Cfr6pAX0iSvXcIt7tN" crossorigin="anonymous"></script>
</body>

</html>
