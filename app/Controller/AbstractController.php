<?php

declare(strict_types=1);

namespace App\Controller;


/**
 * Controleur abstrait qui permet de factoriser des fonctionnalités communes à tous les controleurs
 */
abstract class AbstractController
{

    const SUCCESS = "success";
    const DANGER = "danger";
    const WARNING = "warning";
    const INFO = "info";


    /**
     * Redidrige vers une vue
     * @param string $view fichier relatif (ex: author/list)
     * @param array $params les paramètres à passer à la vue (ex: une liste d'entités)
     * @return void
     */
    protected function render(string $view, array $params = []): void
    {
       
        require_once ROOT . '/view/' . $view . '.php';
    }


    /**
     * Nouvelle requete Http
     * @param string $url 
     * @return never
     */
    protected function redirect(string $url)
    {
        header('Location: '. $url);
        exit;
    }



    /**
     * Ajoute un flash en session
     * @param string $message message à afficher
     * @param string $code la classe css (peut etre une constante de AbstractController)
     * @return void
     */
    protected function addFlash(string $message, string $code = 'success'): void
    {
        $_SESSION['flash'] = [  
            "text"=>$message,
            "code"=>$code  
        ];
    }


    /**
     * Envoie une réponse JSON
     * @param array $data les données à envoyer
     * @param int $code le code HTTP (200 par défaut)
     * @return never
     */
    protected function jsonResponse(array $data, int $code = 200): void
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *'); 
        header('Access-Control-Allow-Methods: GET'); 
        header('Access-Control-Allow-Headers: Content-Type, Authorization');
        http_response_code($code);
        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        exit;
    }
}


