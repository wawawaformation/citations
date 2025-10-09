<?php

declare(strict_types=1);

namespace App\Controller;

use App\Database\PDOSingleton;
use App\Model\Repository\QuoteRepository;
use App\Model\Repository\AuthorRepository;

class QuoteController extends AbstractController
{
    public function index()
    {



        $quoteRepo = new QuoteRepository(PDOSingleton::getInstance());

        $quotes = $quoteRepo->findAll();
       $this->render('quote/list', $quotes);

       require ROOT . '/view/quote/list.php';
    }

    public function add()
    {
        $authorRepo = new AuthorRepository(PDOSingleton::getInstance());
        $authors = $authorRepo->findAll();

        $this->render('quote/add', $authors);
    }

  
}
