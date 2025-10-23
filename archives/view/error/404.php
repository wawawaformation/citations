<?php

$title = "erreur 404";
$pageTitle = "Page non trouvée";
$module = "error";
ob_start();

?>



<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 my-4">
    Erreur 404 <br>
    La page que vous recherchez n'existe pas.

</div>

<?php
$content = ob_get_clean();
require_once ROOT . '/view/template/default.php';