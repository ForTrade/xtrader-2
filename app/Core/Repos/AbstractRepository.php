<?php

namespace Core\Repos;

abstract class AbstractRepository {

    /**
     * Eloquent model
     */
    protected $model;

    /**
     * @param $model
     */
    function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * Fetch a record by id
     *
     * @param $id
     * @return mixed
     */
    public function getById($id)
    {
        return $this->model->find($id);
    }

    public function getAll()
    {
        return $this->model->all();
    }
    
    public function discounts()
    {
        return $this->model->discounts();
    }

}

