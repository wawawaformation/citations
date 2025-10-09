<?php

declare(strict_types=1);

namespace App\Model\Repository;

use App\Model\Entity\Author;

class QuoteRepository extends AbstractRepository
{
    protected string $table = 'quote';
    protected string $entity = 'Quote';


    public function findAll(): array
    {
        $sql = 'SELECT quote.id, quote.quote, author.id as author_id, author.author
FROM quote
LEFT JOIN author ON author.id = quote.author_id';

        $q = $this->statement($sql);
        $result = $q->fetchAll();

        $authors =  [];
        foreach ($result as $row) {

            $author = new Author();
            if ($row['author_id'] !== null) {                //
                $author->hydrate([
                    'id' => $row['author_id'],
                    'author' => $row['author'],

                ]);
            }
            dump($author);
        }
        dd();
    }
}
