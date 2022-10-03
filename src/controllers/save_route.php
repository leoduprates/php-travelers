<?php
// session_start();
// requireValidSession();

$exception = null;
$routeData = [];

if (count($_POST) === 0 && isset($_GET['update'])) {
    $route = Route::getOne(['id' => $_GET['update']]);
    $routeData = $route->getValues();
} elseif (count($_POST) > 0) {
    try {
        $routeData = new Route($_POST);
        if ($routeData->id) {
            $routeData->update();
            addSuccessMsg('Rota alterada com sucesso!');
            header('Location: routes.php');
            exit();
        } else {
            $routeData->id = null;
            $routeData->insert();
            addSuccessMsg('Rota cadastrada com sucesso!');
        }
        $_POST = [];
    } catch (Exception $e) {
        $exception = $e;
    } finally {
        $routeData = $_POST;
    }
}

loadTemplateView('save_route', $routeData + ['exception' => $exception]);
