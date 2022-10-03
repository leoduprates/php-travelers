<main class="content">
    <div class="content-title mb-4">
        <i class="bi bi-map-fill mr-2 icon"></i>
        <h1>Cadastrar Veículo</h1>
    </div>
    <div>
        <?php
            include(TEMPLATES_PATH . "/messages.php");
        ?>
    </div>
    <form action="#" method="post">
        <input type="hidden" name="id" value="<?= $id ?? "" ?>">
        <div class="form-row">
            <div class="form-group">
                <div class="form-floating mb-3">
                    <input type="text" id="model" name="model" class="form-control custom-input" value="<?= $model ?? "" ?>" placeholder="Informe o modelo do veículo utilizado.">
                    <label for="model" class="label-color">Modelo do Veículo</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-floating mb-3">
                    <input type="text" id="fuel" name="fuel" class="form-control custom-input" value="<?= $fuel ?? "" ?>" placeholder="Informe o tipo do combustível.">
                    <label for="fuel" class="label-color">Tipo do Combustível</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-floating mb-3">
                    <input type="text" onkeypress="return isNumberKey(event);" id="car_autonomy" name="car_autonomy" class="form-control custom-input" value="<?= $car_autonomy ?? "" ?>" placeholder="Informe a autonomia do veiculo com este combustível em KM.">
                    <label for="car_autonomy" class="label-color">Autonomia do Veiculo</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-floating mb-3">
                    <input type="text" onkeypress="return isNumberKey(event);" id="fuel_price" name="fuel_price" class="form-control custom-input" value="<?= $fuel_price ?? "" ?>" placeholder="Informe o preço do combustível">
                    <label for="fuel_price" class="label-color">Preço do Combustível</label>
                </div>
            </div>
        </div>
        <div class="buttons-container ">
            <a href="/cars.php" class="btn btn-light button-cancel">
                <i class="bi bi-x-circle"></i>
                Cancelar
            </a>
            <button class="btn btn-primary">
                <i class="bi bi-save"></i>
                Salvar
            </button>
        </div>
    </form>
</main>