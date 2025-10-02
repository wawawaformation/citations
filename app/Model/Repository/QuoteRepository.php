<?php

namespace App\Model\Repository;


class QuoteRepository extends AbstractRepository{
    protected string $table = 'quote';
    protected string $entity = 'Quote';
}