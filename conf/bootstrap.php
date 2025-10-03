<?php

declare(strict_types=1);

$router = new AltoRouter();

require_once ROOT . '/conf/routes.php';


$match = $router->match();


// call closure or throw 404 status
if (is_array($match) && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    // no route was matched
    (new App\Controller\ErrorController())->err404();
}
