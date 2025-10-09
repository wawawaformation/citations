<?php
$title = 'Ajouter une citation';
$pageTitle = 'Ajouter une citation';
$module = 'quotes';
$authors = $params;

ob_start();
?>


<form action="/quotes/add" method="post">
    <div class="mb-3">
        <label for="quote" class="form-label">La citation</label>
        <input type="text" class="form-control" id="quote" name="quote" required>
    </div>
    <div class="mb-3">
        <label for="explanation" class="form-label">Explication</label>
        <textarea name="explanation" id="explanation" name="quote" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label for="author_id" class="form-label">Auteur</label>
        <select name="author_id" id="author_id"  class="form-control">
            <option value="0" selected>Anonyme</option>


            <?php foreach ($authors as $author): ?>
            <option value="<?= $author->getId() ?>"><?= $author->getAuthor() ?></option>
            <?php endforeach ?>
        </select>
    </div>


    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>


<?php
$content = ob_get_clean();
require_once ROOT . '/view/template/default.php';
