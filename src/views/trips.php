<main class="content">
    <div class="content-title mb-4">
        <i class="bi bi-map-fill mr-2 icon"></i>
        <h1>Viagens</h1>
    </div>
    <div class="div-table">
        <table class="table table-hover">
            <thead>
                <th>Cidade de Origem</th>
                <th>Cidade de Destino</th>
                <th>Distancia em Quilômetros</th>
                <th>Modelo do Veículo</th>
                <th>Autonomia do Veiculo</th>
                <th>Tipo do Combustível</th>
                <th>Preço do Combustível</th>
                <th>Total de Litros</th>
                <th>Preço Total</th>
            </thead>
            <tbody>
                <?php foreach ($trips as $trip) : ?>
                    <tr>
                        <td><?= $trip->origin ?></td>
                        <td><?= $trip->target ?></td>
                        <td class="td-center"><?= $trip->distance ?></td>
                        <td><?= $trip->model ?></td>
                        <td class="td-center"><?= $trip->car_autonomy ?></td>
                        <td><?= $trip->fuel ?></td>
                        <td class="td-center"><?= $trip->fuel_price ?></td>
                        <td class="td-center"><?= $trip->total_price . " litros" ?></td>
                        <td class="td-center"><?= "R$ " . $trip->total_liters ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</main>