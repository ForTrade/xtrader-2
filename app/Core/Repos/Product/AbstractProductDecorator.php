<?php namespace Core\Repos\Product;

/**
 * Description of AbstactProductDecorator
 *
 * @author Test
 */
abstract class AbstractProductDecorator implements ProductRepository{
    
    /**
     *
     * @var type 
     */
    protected $model;
    
    /**
     *
     * @param ProductRepository $nextProduct 
     */
    function __construct(ProductRepository $product)
    {
        $this->model = $product;
    }
    
    
}
