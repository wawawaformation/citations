<?php

namespace App\Model\Repository;


class AuthorRepository extends AbstractRepository{
    protected string $table = 'author';
    protected string $entity = 'Author';
}