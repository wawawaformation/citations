<?php

namespace App\Controller;


class ErrorController extends AbstractController
{
    public function err404()
    {
        http_response_code(404);
        echo 'Page not found - 404';
    }
}