<?php

namespace App\Controller;

use App\Model\Repository\AuthorRepository;

class AuthorController extends AbstractController
{
    public function index()
    {
        $author = new AuthorRepository(\App\Database\PDOSingleton::getInstance());
        $authors = $author->findAll();

        $this->render('author/list', ['authors' => $authors]);
    }

    public function add()
    {
        $this->render('author/add');
    }


}