<main class="content">
    <div class="content-title mb-4">
        <i class="bi bi-map-fill mr-2 icon"></i>
        <h1>Cadastrar Rota</h1>
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
                    <input type="text" id="origin" name="origin" class="form-control custom-input" value="<?= $origin ?? "" ?>" placeholder="Informe a cidade de origem.">
                    <label for="origin" class="label-color">Cidade de Origem</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-floating mb-3">
                    <input type="text" id="target" name="target" class="form-control custom-input" value="<?= $target ?? "" ?>" placeholder="Informe a cidade de destino.">
                    <label for="target" class="label-color">Cidade de Destino</label>
                </div>
            </div>
            <div class="form-group">
                <div class="form-floating mb-3">
                    <input type="text" onkeypress="return isNumberKey(event);" id="distance" name="distance" class="form-control custom-input" value="<?= $distance ?? "" ?>" placeholder="Informe a distancia em quilômetros.">
                    <label for="distance" class="label-color">Distancia em Quilômetros</label>
                </div>
            </div>
        </div>
        <div class="buttons-container ">
            <a href="/routes.php" class="btn btn-light button-cancel">
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