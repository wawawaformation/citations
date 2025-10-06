

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les auteurs | Admin Citations</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Citations admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/quotes">Les citations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/authors">Les auteurs</a>
                    </li>
                </ul>
                <ul class="navbar-nav me-0 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/users">Les utilisateurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/users/profile">Mon profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../html.html" target="_blank" title="le site"><i
                                class="bi bi-eye"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/users/logout" title="Se déconnecter"><i
                                class="bi bi-box-arrow-right"></i></a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
   
    <div class="container my-5">
        <h1 class="title mb-4">
            Les auteurs
        </h1>
        <div class="ajouter mb-3">
            <a href="/authors/add" class="btn btn-primary">Ajouter un auteur</a>
        </div>


         <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 my-4">
          <?php foreach ($params['authors'] as $author): ?>
            <!-- Auteur 1 -->
            <div class="col">
                <div class="card h-100">
                   
                    <div class="card-body">
                        <h5 class="card-title"><?= strip_tags($author->getAuthor()) ?></h5>
                        <p class="card-text"><?= substr(strip_tags($author->getBiography()), 0, 100) ?> ...etc</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="/authors/edit/<?= $author->getId() ?>" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i>
                            Modifier</a>
                        <a href="/authors/delete/<?= $author->getId() ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i>
                            Supprimer</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
         
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>