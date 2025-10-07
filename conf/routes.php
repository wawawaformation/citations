<?php

declare(strict_types=1);



// Authors routes
$router->map('GET', '/authors', function () {
   (new App\Controller\AuthorController())->index();
});
$router->map('GET|POST', '/authors/add', function () {
   (new App\Controller\AuthorController())->add();
});
$router->map('GET', '/authors/delete/[i:id]', function ($id) {
   (new App\Controller\AuthorController())->delete((int) $id);
});






$router->map('GET', '/error/exception', function () {
   (new App\Controller\ErrorController())->exception();
});
