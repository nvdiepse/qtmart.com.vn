<?php

namespace App\Services;

use App\Repositories\ArticleRepository;

/**
 *
 */
class ArticleService
{
    /**
     * @var ArticleRepository
     */
    private $articleRepository;

    /**
     * @param ArticleRepository $articleRepository
     */
    public function __construct(
        ArticleRepository $articleRepository
    )
    {
        $this->articleRepository = $articleRepository;
    }

    /**
     * @param $data
     * @return mixed
     */
    public function store($data)
    {
        return $this->articleRepository->create($data);
    }

    /**
     * @param $id
     * @param $data
     * @return mixed|void
     */
    public function updateById($id, $data)
    {
        return $this->articleRepository->update($id, $data);
    }

    /**
     * @param string $orderBy
     * @param string $limit
     * @return mixed
     */
    public function getAll(string $orderBy = "asc", $limit = 10)
    {
        return $this->articleRepository->getAll($orderBy, $limit);
    }

    public function delete($id)
    {
        return $this->articleRepository->delete($id);
    }
}
