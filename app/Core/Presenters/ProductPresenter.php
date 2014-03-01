<?php namespace Core\Presenters;

use Core\Services\Cache\CacheInterface;

/**
 * 
 */
class ProductPresenter {
    
    /**
     *
     * @var type 
     */
    protected $category = array();

    /**
     *
     * @var type 
     */
    protected $discount = array();

    /**
     *
     * @param CacheInterface $cache 
     */
    function __construct(CacheInterface $cache)
    {
        $this->cache = $cache;
    }

    /**
     *
     * @param type $view 
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
     *
     * @param type $key
     * @param type $product 
     */
    private function getCategories($key,$product)
    {
        if ($this->cache->has($key)) {

            $this->category[$product->id] = $this->cache->get($key);
            
        } else {

            $this->category[$product->id] = $product->category;
            $this->cache->put($key, $this->category[$product->id]);
            
        }
    }
    
    /**
     *
     * @param type $key
     * @param type $product 
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
