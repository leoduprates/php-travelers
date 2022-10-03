<main class="content">
    <div class="content-title mb-4">
        <i class="bi bi-map-fill mr-2 icon"></i>
        <h1>Veículos</h1>
    </div>
    <div>
        <?php
            include(TEMPLATES_PATH . "/messages.php");
        ?>
    </div>
    <div class="button-container mb-4">
        <a class="btn btn-primary mb-3" href="save_car.php">
            <i class="bi bi-plus"></i> Criar Veículo
        </a>
    </div>
    <div class="div-table">
        <table class="table table-hover">
            <thead>
                <th>Modelo do Veículo</th>
                <th>Tipo do Combustível</th>
                <th>Autonomia do Veiculo</th>
                <th>Preço do Combustível</th>
                <th></th>
            </thead>
            <tbody>
                <?php foreach ($cars as $car) : ?>
                    <tr>
                        <td><?= $car->model ?></td>
                        <td><?= $car->fuel ?></td>
                        <td class="td-center"><?= $car->car_autonomy ?></td>
                        <td class="td-center"><?= $car->fuel_price ?></td>
                        <td class="td-right">
                            <a href="save_car.php?update=<?= $car->id ?>" class="btn btn-secondary rounded-circle mr-2">
                                <i class="bi bi-pencil-fill"></i>
                            </a>
                            <a href="?delete=<?= $car->id ?>" class="btn btn-danger rounded-circle">
                                <i class="bi bi-trash3-fill"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</main>