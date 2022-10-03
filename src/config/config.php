<?php
date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');

// Folders
define('MODELS_PATH', realpath(dirname(__FILE__) . '/../models'));
define('VIEWS_PATH', realpath(dirname(__FILE__) . '/../views'));
define('TEMPLATES_PATH', realpath(dirname(__FILE__) . '/../views/templates'));
define('CONTROLLERS_PATH', realpath(dirname(__FILE__) . '/../controllers'));
define('EXCEPTIONS_PATH', realpath(dirname(__FILE__) . '/../exceptions'));

// Files
require_once(realpath(dirname(__FILE__) . '/database.php'));
require_once(realpath(dirname(__FILE__) . '/loader.php'));
require_once(realpath(dirname(__FILE__) . '/session.php'));
require_once(realpath(dirname(__FILE__) . '/utils.php'));
require_once(realpath(MODELS_PATH . '/Model.php'));
require_once(realpath(MODELS_PATH . '/User.php'));
require_once(realpath(MODELS_PATH . '/Route.php'));
require_once(realpath(MODELS_PATH . '/Car.php'));
require_once(realpath(MODELS_PATH . '/Trips.php'));
require_once(realpath(EXCEPTIONS_PATH . '/AppException.php'));
