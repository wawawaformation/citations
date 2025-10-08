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
$router->map('GET', '/authors/[i:id]', function ($id) {
   (new App\Controller\AuthorController())->show((int) $id);
});

$router->map('GET', '/json/authors', function () {
   (new App\Controller\AuthorController())->jsonAll();
});


$router->map('GET', '/error/exception', function () {
   (new App\Controller\ErrorController())->exception();
});




// Authentification routes
$router->map('GET|POST', '/login', function () {
   (new App\Controller\AuthController())->login();
});
$router->map('GET', '/logout', function () {
   (new App\Controller\AuthController())->logout();
});