<?php

use Core\Repos\Product\ProductRepository;

class HomeController extends BaseController {
    
    /**
     * Product Repository
     * @var Core\Repositories\ProductRepository 
     */
    protected $productRepo;
    
    /**
     * Construct
     * 
     * @param ProductRepository $product 
     */
    function __construct(ProductRepository $product)
    {
        $this->productRepo = $product;
    }

    /**
     *
     * @return type 
     */
    public function index()
    {
        $products = $this->productRepo->getFeatured();
        return View::make('home.index', compact('products'));
    }

}