<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marvel Personajes</title>
    <!-- Bootstrap5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-d3m9oDum3iF0+K1xJJKbTxhkez24FZVgpUJf+1kWg3Iwad6Dd2JKCmsBt7UnwX3Z" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2>Personajes de Marvel</h2>
        <div class="row mt-4">
            <!-- Aqui se muestra la informacion y solo uso un foeach para iterar la info de la cards-->
            <?php foreach ($marvelPersonajes as $personaje) : ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?= $personaje['imagen'] ?>" class="card-img-top" alt="<?= $personaje['nombre'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $personaje['nombre'] ?></h5>
                            <p class="card-text"><?= $personaje['descripcion'] ?></p>
                            <a href="<?= site_url("marvel/editar/{$personaje['id']}") ?>" class="btn btn-primary">Editar</a>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminarModal<?= $personaje['id'] ?>">
                                Eliminar
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal de Eliminar -->
                <div class="modal fade" id="eliminarModal<?= $personaje['id'] ?>" tabindex="-1" aria-labelledby="eliminarModalLabel<?= $personaje['id'] ?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="eliminarModalLabel<?= $personaje['id'] ?>">Eliminar Personaje</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ¿Seguro que deseas eliminar ?<?= $personaje['nombre'] ?>?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <a href="<?= site_url("marvel/eliminar/{$personaje['id']}") ?>" class="btn btn-danger">Eliminar</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Componente de paginacion -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                    <li class="page-item <?= $currentPage == $i ? 'active' : '' ?>">
                        <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                    </li>
                <?php endfor; ?>
            </ul>
        </nav>
    </div>
    <!--Bootstrap5-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-GLhlTQ8iKPEZL+u8/At4uRU6BabQ8M3pPbT6LZd5qlIu5Cfr6pAX0iSvXcIt7tN" crossorigin="anonymous"></script>
</body>
</html>
