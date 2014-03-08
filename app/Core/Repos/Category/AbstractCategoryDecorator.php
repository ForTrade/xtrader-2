<?php namespace Core\Repos\Category;

/**
 * Description of AbstactProductDecorator
 *
 * @author Test
 */
abstract class AbstractCategoryDecorator implements CategoryRepository{
    
    /**
     *
     * @var type 
     */
    protected $model;
    
    /**
     *
     * @param ProductRepository $nextProduct 
     */
    function __construct(CategoryRepository $category)
    {
        $this->model = $category;
    }
    
    
}
