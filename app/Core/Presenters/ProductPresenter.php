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
     * Product attributes
     * @var array 
     */
    protected $attributes = array();
    
    /**
     * Product photos
     * @var array
     */
    protected $photos = array();

    /**
     * Construct
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
            
            $key = md5('product.attr.' . $product->id);
            $this->getAttributes($key, $product);
            
            $key = md5('product.photos.' . $product->id);
            $this->getPhotos($key, $product);
            
        }

        $view->with('category', $this->category);
        $view->with('discount', $this->discount);
        $view->with('attributes', $this->attributes);
        $view->with('photos', $this->photos);
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
    
    /**
     * Retrive product photos
     * 
     * @param string $key
     * @param object $product 
     */
    private function getAttributes($key,$product)
    {
        if ($this->cache->has($key)) {

            $this->attributes[$product->id] = $this->cache->get($key);
            
        } else {

            $this->attributes[$product->id] = $product->attributes;
            $this->cache->put($key, $this->attributes[$product->id]);
            
        }
    }
    
    private function getPhotos($key,$product)
    {
        if ($this->cache->has($key)) {

            $this->photos[$product->id] = $this->cache->get($key);
            
        } else {

            $this->photos[$product->id] = $product->photos;
            $this->cache->put($key, $this->photos[$product->id]);
            
        }
    }
    

}

?>
