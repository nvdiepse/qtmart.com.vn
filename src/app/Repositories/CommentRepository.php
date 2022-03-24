<?php

namespace App\Repositories;

use BaseRepository;

class CommentRepository extends BaseRepository
{

    public function getModel()
    {
        // TODO: Implement getModel() method.
    }

    public function approve($id)
    {
        $comment = $this->findOne($id);
        if ($comment) {

        }
    }
}
