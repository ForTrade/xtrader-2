<?php namespace Core\Repos\Category;

use Core\Repos\AbstractRepository;
use Illuminate\Database\Eloquent\Model;

class DbCategoryRepository extends AbstractRepository implements CategoryRepository {

    /**
     * @var Product
     */
    protected $model;

    /**
     * @param Model $model
     */
    function __construct(Model $model)
    {
        $this->model = $model;
    }
    
    /**
     *
     * @param string $slug
     * @return  
     */
    public function getBySlug($slug)
    {
        return $this->model
                ->with('products')
                ->where('slug', '=', $slug)
                ->first();
        
    }



}