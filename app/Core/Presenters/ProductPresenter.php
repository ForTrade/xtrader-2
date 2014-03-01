<?php namespace Core\Presenters;

use Core\Services\Cache\CacheInterface;

/**
 * Product Presenter
 */
class ProductPresenter {
    
    /**
     * Product categories
     * @var array 
     */
    protected $category = array();

    /**
     * Product discounts
     * @var array
     */
    protected $discount = array();

    /**
     * Inject cache interface to the constructor
     * 
     * @param CacheInterface $cache 
     */
    function __construct(CacheInterface $cache)
    {
        $this->cache = $cache;
    }

    /**
     * Bound data to the view
     * @param View $view 
     */
    public function compose($view)
    {
        $viewData = $view->getData();

        foreach ($viewData['products'] as $product) {

            $key = md5('product.cat.' . $product->id);
            $this->getCategories($key, $product);

            $key = md5('product.disc.' . $product->id);
            $this->getDiscounts($key, $product);
            
        }

        $view->with('category', $this->category);
        $view->with('discount', $this->discount);
    }

    /**
     * Retrive product categories
     * 
     * @param string $key
     * @param object $product 
     */
    private function getCategories($key, $product)
    {
        if ($this->cache->has($key)) {

            $this->category[$product->id] = $this->cache->get($key);
            
        } else {

            $this->category[$product->id] = $product->category;
            $this->cache->put($key, $this->category[$product->id]);
            
        }
    }
    
    /**
     * Retrive product discounts
     * 
     * @param string $key
     * @param object $product 
     */
    private function getDiscounts($key,$product)
    {
        if ($this->cache->has($key)) {

            $this->discount[$product->id] = $this->cache->get($key);
            
        } else {

            $this->discount[$product->id] = $product->discounts;
            $this->cache->put($key, $this->discount[$product->id]);
            
        }
    }
    

}

?>
