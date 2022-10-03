<?php
$exception = null;

if (isset($_GET['delete'])) {
    try {
        Car::deleteById($_GET['delete']);
        addSuccessMsg('Veículo excluído com sucesso.');
    } catch (Exception $e) {
        if (stripos($e->getMessage(), 'FOREIGN KEY')) {
            addErrorMsg('Não foi possível excluir o veículo.');
        } else {
            $exception = $e;
        }
    }
}

$cars = Car::get();

loadTemplateView('cars', ['cars' => $cars, 'exception' => $exception]);
