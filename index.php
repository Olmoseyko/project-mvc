<?php

use Core\Libs\Route;

spl_autoload_register(function($className){
    // Core\Libs\Route.php преобразовать в
    // core/libs/Route.php

   require_once $className.'.php';
});

Route::start();
