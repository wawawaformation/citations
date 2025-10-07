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

        // Traitement du formulaire
        if (isset($_POST['author'], $_POST['biography'])) {
            $authorRepo = new AuthorRepository(\App\Database\PDOSingleton::getInstance());

            $author = [
                'author' => strip_tags($_POST['author']),
                'biography' => $_POST['biography']
            ];

            $authorEntity = $authorRepo->create($author);
            if ($authorEntity) {
                $this->addFlash('L\'auteur a bien été ajouté');
                $this->redirect('/authors');
               
            }
        }

        $this->render('/author/add');

       
    }


    public function delete(int $id)

    {
        $authorRepo = new AuthorRepository(\App\Database\PDOSingleton::getInstance());

        if ($authorRepo->delete($id)) {

           $this->addFlash('Votre auteur a bien supprimé', AbstractController::SUCCESS);
            $this->redirect('/authors');
        }
    }
}
