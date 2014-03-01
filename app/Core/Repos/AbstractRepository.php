<?php namespace Core\Repos;

/**
 * https://github.com/laracasts/Reusable-Repositories/tree/master/app/Acme/Repos
 */

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

    /**
     *
     * @return type 
     */
    public function getAll()
    {
        return $this->model->all();
    }



}

