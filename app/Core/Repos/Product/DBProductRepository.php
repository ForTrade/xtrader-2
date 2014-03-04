<?php namespace Core\Repos\Product;

use Core\Repos\AbstractRepository;
use Product;

class DbProductRepository extends AbstractRepository implements ProductRepository {

    /**
     * @var Product
     */
    protected $model;

    /**
     * @param Product $model
     */
    function __construct(Product $model)
    {
        $this->model = $model;
    }

    /**
     * Get featured products
     * @return type 
     */
    public function getFeatured()
    {
        return $this->model
                ->where('featured', '=', 1)
                ->take(10)
                ->get();
    }


}