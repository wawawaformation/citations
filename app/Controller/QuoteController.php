<?php

declare(strict_types=1);

namespace App\Controller;

class QuoteController extends AbstractController
{
    public function list()
    {
        echo 'Listes de citations';
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
