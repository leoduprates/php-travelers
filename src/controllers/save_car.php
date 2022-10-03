<?php
// session_start();
// requireValidSession();

$exception = null;
$carData = [];

if (count($_POST) === 0 && isset($_GET['update'])) {
    $car = Car::getOne(['id' => $_GET['update']]);
    $carData = $car->getValues();
} elseif (count($_POST) > 0) {
    try {
        $carData = new Car($_POST);
        if ($carData->id) {
            $carData->update();
            addSuccessMsg('Veículo alterado com sucesso!');
            header('Location: cars.php');
            exit();
        } else {
            $carData->id = null;
            $carData->insert();
            addSuccessMsg('Veículo cadastrado com sucesso!');
        }
        $_POST = [];
    } catch (Exception $e) {
        $exception = $e;
    } finally {
        $carData = $_POST;
    }
}

loadTemplateView('save_car', $carData + ['exception' => $exception]);
