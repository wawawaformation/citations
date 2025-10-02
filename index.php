<?php

require_once 'vendor/autoload.php';

use App\Model\Repository\AuthorRepository;
use App\Model\Repository\QuoteRepository;
use App\Model\Entity\Author;


try{
    $pdo = new PDO('mysql:host=localhost;dbname=ecf2;charset=utf8', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}

echo '<h2>Liste des auteurs</h2>';
$authorRepo = new AuthorRepository($pdo);


$authors = $authorRepo->findAll();
dump($authors);

$wilde = $authorRepo->find(2);
dump($wilde);

echo '<h1>Liste des citations</h1>';
$quoteRepo = new QuoteRepository($pdo);
$quotes = $quoteRepo->findAll();



$quote2 = $quoteRepo->find(2);
dump($quote2);

echo '<h2>Citations de Raoul</h2>';



$data = [
    'author' => 'Raoul',
    'image' => 'raoul.jpg'
];



$raoul = $authorRepo->create($data);
dump($raoul);

$data = [
    'quote' => 'Sup ?',
    'explanation' => 'Salutation raccoucie aux USAZ',
    'author_id' => $raoul->getId()
];

$sup = $quoteRepo->create($data);
dump($sup);