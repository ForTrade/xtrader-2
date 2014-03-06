<?php namespace Core\Repos\Category;

interface CategoryRepository {

    /**
     * Fetch a record by id
     *
     * @param $id
     */
    public function getById($id);
    
    /**
     * 
     */
    public function getBySlug($slug);
    
    
    
    
}

