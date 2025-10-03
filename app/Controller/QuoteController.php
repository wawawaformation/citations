<?php

declare(strict_types=1);

namespace App\Controller;

use App\Model\Repository\QuoteRepository;

class QuoteController extends AbstractController
{
    public function list()
    {


       // on va chercher les citations en base de données
       $pdo = new \PDO('mysql:host=localhost;dbname=ecf2', 'root', '');
       $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
       $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
       $quoteRepository = new QuoteRepository($pdo);
       $quotes = $quoteRepository->findAll();
       dd($quotes);
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
