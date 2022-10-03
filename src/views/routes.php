<main class="content">
    <div class="content-title mb-4">
        <i class="bi bi-map-fill mr-2 icon"></i>
        <h1>Rotas</h1>
    </div>
    <div>
        <?php
            include(TEMPLATES_PATH . "/messages.php");
        ?>
    </div>
    <div class="button-container mb-4">
        <a class="btn btn-primary mb-3" href="save_route.php">
            <i class="bi bi-plus"></i> Criar Rota
        </a>
    </div>
    <div class="div-table">
        <table class="table table-hover">
            <thead>
                <th>Cidade de Origem</th>
                <th>Cidade de Destino</th>
                <th>Distancia em Quilômetros</th>
                <th></th>
            </thead>
            <tbody>
                <?php foreach ($routes as $route) : ?>
                    <tr>
                        <td><?= $route->origin ?></td>
                        <td><?= $route->target ?></td>
                        <td class="td-center"><?= $route->distance ?></td>
                        <td class="td-right">
                            <a href="save_route.php?update=<?= $route->id ?>" class="btn btn-secondary rounded-circle mr-2">
                                <i class="bi bi-pencil-fill"></i>
                            </a>
                            <a href="?delete=<?= $route->id ?>" class="btn btn-danger rounded-circle">
                                <i class="bi bi-trash3-fill"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</main>