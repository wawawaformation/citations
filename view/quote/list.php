<?php

$title = "Citations";
$pageTitle = "Liste des citations";
$module = "quotes";
ob_start();
?>


<div class="container my-5">
        <h1 class="title mb-4">
            Les citations
        </h1>
        <div class="ajouter mb-3">
            <a href="quote.html" class="btn btn-primary">Ajouter une citation</a>
        </div>
        <table class="table table-striped  mb-3">
            <thead>
                <tr>
                    <th style="width: 5%;">Id</th>
                    <th>Citation</th>
                    <th style="width: 20%; text-align: right;">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Un con, ça ose tout. C’est même à ça qu’on les reconnaît.</td>
                    <td class="text-end">
                        <a href="citation_edit/1" class="text-decoration-none me-2"><i class="bi bi-pencil"></i>
                            Modifier</a>
                        <a href="citation_delete/1" class="text-decoration-none text-danger"><i class="bi bi-trash"></i>
                            Supprimer</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Je ne parle pas aux cons, ça les instruit.</td>
                    <td class="text-end">
                        <a href="citation_edit/2" class="text-decoration-none me-2"><i class="bi bi-pencil"></i>
                            Modifier</a>
                        <a href="citation_delete/2" class="text-decoration-none text-danger"><i class="bi bi-trash"></i>
                            Supprimer</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>L’enfer, c’est les autres.</td>
                    <td class="text-end">
                        <a href="citation_edit/3" class="text-decoration-none me-2"><i class="bi bi-pencil"></i>
                            Modifier</a>
                        <a href="citation_delete/3" class="text-decoration-none text-danger"><i class="bi bi-trash"></i>
                            Supprimer</a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>L’homme est condamné à être libre.</td>
                    <td class="text-end">
                        <a href="citation_edit/4" class="text-decoration-none me-2"><i class="bi bi-pencil"></i>
                            Modifier</a>
                        <a href="citation_delete/4" class="text-decoration-none text-danger"><i class="bi bi-trash"></i>
                            Supprimer</a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Les blessures ne se referment jamais vraiment, on apprend juste à vivre avec.</td>
                    <td class="text-end">
                        <a href="citation_edit/5" class="text-decoration-none me-2"><i class="bi bi-pencil"></i>
                            Modifier</a>
                        <a href="citation_delete/5" class="text-decoration-none text-danger"><i class="bi bi-trash"></i>
                            Supprimer</a>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Une femme doit avoir de l'argent et une chambre à soi si elle veut écrire de la fiction.</td>
                    <td class="text-end">
                        <a href="citation_edit/6" class="text-decoration-none me-2"><i class="bi bi-pencil"></i>
                            Modifier</a>
                        <a href="citation_delete/6" class="text-decoration-none text-danger"><i class="bi bi-trash"></i>
                            Supprimer</a>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>La gratitude est non seulement la plus grande des vertus, mais la mère de toutes les autres.
                    </td>
                    <td class="text-end">
                        <a href="citation_edit/7" class="text-decoration-none me-2"><i class="bi bi-pencil"></i>
                            Modifier</a>
                        <a href="citation_delete/7" class="text-decoration-none text-danger"><i class="bi bi-trash"></i>
                            Supprimer</a>
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Ce qui compte, ce n’est pas ce qu’on a fait de moi, mais ce que je fais de ce qu’on a fait de
                        moi.</td>
                    <td class="text-end">
                        <a href="citation_edit/8" class="text-decoration-none me-2"><i class="bi bi-pencil"></i>
                            Modifier</a>
                        <a href="citation_delete/8" class="text-decoration-none text-danger"><i class="bi bi-trash"></i>
                            Supprimer</a>
                    </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>On ne peut pas trouver la paix en évitant la vie.</td>
                    <td class="text-end">
                        <a href="citation_edit/9" class="text-decoration-none me-2"><i class="bi bi-pencil"></i>
                            Modifier</a>
                        <a href="citation_delete/9" class="text-decoration-none text-danger"><i class="bi bi-trash"></i>
                            Supprimer</a>
                    </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>L’humour, c’est le sucre glace sur le caca.</td>
                    <td class="text-end">
                        <a href="citation_edit/10" class="text-decoration-none me-2"><i class="bi bi-pencil"></i>
                            Modifier</a>
                        <a href="citation_delete/10" class="text-decoration-none text-danger"><i
                                class="bi bi-trash"></i> Supprimer</a>
                    </td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Dès qu’un homme est né, il est assez vieux pour mourir.</td>
                    <td class="text-end">
                        <a href="citation_edit/11" class="text-decoration-none me-2"><i class="bi bi-pencil"></i>
                            Modifier</a>
                        <a href="citation_delete/11" class="text-decoration-none text-danger"><i
                                class="bi bi-trash"></i> Supprimer</a>
                    </td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Heureux soient les fêlés, car ils laisseront passer la lumière.</td>
                    <td class="text-end">
                        <a href="citation_edit/12" class="text-decoration-none me-2"><i class="bi bi-pencil"></i>
                            Modifier</a>
                        <a href="citation_delete/12" class="text-decoration-none text-danger"><i
                                class="bi bi-trash"></i> Supprimer</a>
                    </td>
                </tr>
            </tbody>

        </table>
    </div>

    <?php
$content = ob_get_clean();
require_once ROOT . '/view/template/default.php';