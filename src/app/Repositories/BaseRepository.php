<?php
namespace App\Repositories;
use Illuminate\Contracts\Container\BindingResolutionException;

/**
 *
 */
abstract class BaseRepository
{
    /**
     * @var
     */
    protected $model;

    /**
     *
     * @throws BindingResolutionException
     */
    public function __construct()
    {
        $this->setModel();
    }

    /**
     * @return mixed
     */
    abstract public function getModel();

    /**
     * @throws BindingResolutionException
     */
    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->model->all();
    }

    /**
     * @param int $limit
     * @return mixed
     */
    public function getPaginate($orderBy = "asc", int $limit = 25)
    {
        return $this->model->orderBy('id', $orderBy)->paginate($limit);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findOne($id)
    {
        return $this->model->find($id);
    }

    /**
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes = [])
    {
        return $this->model->create($attributes);
    }

    /**
     * @param $id
     * @param array $attributes
     * @return mixed|void
     */
    public function update($id, array $attributes = [])
    {
        $result = $this->find($id);
        if ($result) {
            $result->update($attributes);
            return $result;
        }
    }

    /**
     * @param $id
     * @return bool
     */
    public function delete($id): bool
    {
        $result = $this->findOne($id);
        if ($result) {
            $result->delete();
            return true;
        }
        return false;
    }

    /**
     * @param $conditions
     * @param string $order
     * @param int $limit
     * @return mixed
     */
    public function where($conditions, string $order = 'id', int $limit = 10)
    {
        if ($limit) {
            return $this->model->where($conditions)->orderBy($order)->limit($limit)->get();
        }
        return $this->model->where($conditions)->orderBy($order)->get();
    }

    /**
     * @param $condition
     * @return mixed
     */
    public function first($condition)
    {
        return $this->model->where($condition)->first();
    }

    public function findBySlug($slug)
    {
        return $this->model->where('slug', $slug)->first();
    }
}
