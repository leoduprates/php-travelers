<?php
$exception = null;

if (isset($_GET['delete'])) {
    try {
        Route::deleteById($_GET['delete']);
        addSuccessMsg('Rota excluída com sucesso.');
    } catch (Exception $e) {
        if (stripos($e->getMessage(), 'FOREIGN KEY')) {
            addErrorMsg('Não foi possível excluir a rota.');
        } else {
            $exception = $e;
        }
    }
}

$routes = Route::get();

loadTemplateView('routes', ['routes' => $routes, 'exception' => $exception]);
