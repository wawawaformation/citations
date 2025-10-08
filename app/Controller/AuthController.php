<?php


namespace App\Controller;


/**
 * Gestion de l'authentification
 */
class AuthController extends AbstractController
{
    public function login()
    {
        // Si le formulaire est soumis

        if(isset($_POST["mail"], $_POST["password"])){

            //on verifie que les champs ne sont pas vides
           if(empty($_POST["mail"]) || empty($_POST["password"])){
               $this->addFlash('Veuillez remplir tous les champs', AbstractController::DANGER);
               return $this->redirect('/login');
           }

           //on verifie que le mail est au bon format
           if(!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)){
               $this->addFlash('Le format de l\'adresse mail est invalide', AbstractController::DANGER);
               return $this->redirect('/login');
           }


           //On compare le mot de passe avec celui en base de données
           $userRepo = new \App\Model\Repository\UserRepository(\App\Database\PDOSingleton::getInstance());
           $hashed = (string)$userRepo->getHashedPassword($_POST["mail"]);

           if (password_verify($_POST["password"], $hashed)) {
            
            
            //on met en place la session et on redirige vers la page d'accueil
            $user = $userRepo->getUserByMail($_POST["mail"]);

            $_SESSION["user"] = [
                "id"=> $user['id'],
                "mail"=>$user['mail'],
                "is_admin"=>(bool)$user["is_admin"],
            ];

            $this->redirect("/");
              } else {
                $this->addFlash('Identifiants invalides', AbstractController::DANGER);
                $this->redirect('/login');
           }


        }
        // Affichage du formulaire
        $this->render('auth/login');
    }


    public function logout()
    {
        // On détruit la session
        unset($_SESSION['user']);
        session_destroy();

        // On redirige vers la page de connexion
        $this->redirect('/login');
    }
}