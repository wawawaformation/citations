<?php


/**
 * Entrypoint of the application
 */

session_start();

print_r($_SESSION);

require_once dirname(__DIR__) . '/conf/const.php';
require_once ROOT . '/vendor/autoload.php';



require_once ROOT . '/conf/bootstrap.php';


