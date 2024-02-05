<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Personaje</title>
    <!-- Bootstrap 5 (CSS) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-d3m9oDum3iF0+K1xJJKbTxhkez24FZVgpUJf+1kWg3Iwad6Dd2JKCmsBt7UnwX3Z" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h2>Eliminar Personaje</h2>
        <p>¿Estás seguro de que quieres eliminar a <?= $personaje['nombre'] ?>?</p>
        <a href="<?= site_url("marvel/eliminar/{$personaje['id']}") ?>" class="btn btn-danger">Eliminar</a>
        <a href="<?= site_url('marvel') ?>" class="btn btn-secondary">Cancelar</a>
    </div>

    <!-- Bootstrap 5 (JS) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-GLhlTQ8iKPEZL+u8/At4uRU6BabQ8M3pPbT6LZd5qlIu5Cfr6pAX0iSvXcIt7tN" crossorigin="anonymous"></script>
</body>

</html>
