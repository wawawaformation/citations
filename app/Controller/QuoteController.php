<?php

declare(strict_types=1);

namespace App\Controller;

use App\Database\PDOSingleton;
use App\Model\Repository\QuoteRepository;

class QuoteController extends AbstractController
{
    public function index()
    {



        $quoteRepo = new QuoteRepository(PDOSingleton::getInstance());

        $quotes = $quoteRepo->findAll();

       require ROOT . '/view/quote/list.php';
    }

    public function show($id)
    {
        echo 'Il faudra montrer la citation ' . htmlspecialchars($id);
    }

    public function create()
    {
        echo 'Il faudra créer une nouvelle citation';
    }

    public function edit($id)
    {
        echo 'Il faudra modifier la citation ' . htmlspecialchars($id);
    }

    public function delete($id)
    {
        echo 'Il faudra supprimer la citation ' . htmlspecialchars($id);
    }
}
