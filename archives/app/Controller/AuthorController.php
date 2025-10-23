<?php

namespace App\Controller;

use App\Model\Repository\AuthorRepository;

class AuthorController extends AbstractController
{


    public function __construct()
    {
         $this->accessValidator();
    }

    public function index()
    {

       

        $author = new AuthorRepository(\App\Database\PDOSingleton::getInstance());
        $authors = $author->findAll();

        $this->render('author/list', ['authors' => $authors]);
    }

    public function show($id){
        $authorRepo = new AuthorRepository(\App\Database\PDOSingleton::getInstance());
        $author = $authorRepo->find($id);

       

        $this->render('author/show', ['author' => $author]);
    }

    public function add()
    {

       
        // Traitement du formulaire
        if (isset($_POST['author'], $_POST['biography'])) {
            if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
                unset($_SESSION['csrf_token']);
                $this->addFlash('Je n\'aime pas me faire introduire', AbstractController::DANGER);
                $this->redirect('/authors/add');
            }


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

        $csrfToken = bin2hex(random_bytes(32));
        $_SESSION['csrf_token'] = $csrfToken;

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


    public function jsonAll()
    {
        $authorRepo = new AuthorRepository(\App\Database\PDOSingleton::getInstance());
        $authors = $authorRepo->findAll();

       
      $data = [];
      foreach ($authors as $author) {
          $temp = [
              'id' => $author->getId(),
              'author' => $author->getAuthor(),
              'biography' => $author->getBiography()
          ];
            $data[] = $temp;
      }

     $this->jsonResponse($data);
    }
}
