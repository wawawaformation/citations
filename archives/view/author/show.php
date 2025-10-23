<?php

$title = "Un auteur";
$pageTitle = "Détail d'un auteur";
$module = "authors";
ob_start();

?>



<div class="g-4 my-4">

    <h2><?= htmlspecialchars($params['author']->getAuthor()) ?></h2>
   <div class="biography">
    <?= $params['author']->getBiography() ?>
   </div>

    <a href="/authors" class="btn btn-secondary ms-3">
        <i class="bi bi-arrow-left"></i> Retour
    </a>
</div>

<?php

$content = ob_get_clean();
require_once ROOT . '/view/template/default.php';
