<?php

declare(strict_types=1);

namespace App\Controller;

abstract class AbstractController
{

    const SUCCESS = "success";
    const DANGER = "danger";
    const WARNING = "warning";
    const INFO = "info";
    protected function render(string $view, array $params = []): void
    {
       
        require_once ROOT . '/view/' . $view . '.php';
    }


    /**
     * nouvelle requete Http
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
}


