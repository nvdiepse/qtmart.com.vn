<?php

namespace App\Repositories;

use App\Models\Article;

class ArticleRepository extends BaseRepository
{

    public function getModel()
    {
        return Article::class;
    }
}
