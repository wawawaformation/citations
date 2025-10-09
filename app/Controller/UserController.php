<?php

namespace App\Controller;

class UserController extends AbstractController
{
    public function index()
    {
        $this->accessValidator('admin');

        echo 'User controller index';
    }   
}