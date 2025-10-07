
<?php 

    $title = "Ajouter un auteur";
    $pageTitle = "Ajouter un auteur";
    $module = "authors";
    ob_start();
  
?>
      


<div class="g-4 my-4">

 <form action="/authors/add" method="post">
            <div class="mb-4">
                <label for="name" class="form-label">Nom de l'auteur (obligatoire)</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-4">
                <label for="biography" class="form-label">Biographie (obligatoire)</label>
                <textarea class="form-control" id="biography" name="biography" rows="5" required></textarea>
            </div>

            <button type="submit" class="btn btn-success">
                <i class="bi bi-check-circle"></i> Enregistrer
            </button>
            <a href="/authors" class="btn btn-secondary ms-3">
                <i class="bi bi-arrow-left"></i> Retour
            </a>
        </form>

</div>


<?php
$content = ob_get_clean();
require_once ROOT . '/view/template/default.php';