<?php namespace Core\Repos\Product;

use Product;
use Core\Services\Cache\CacheInterface;

class CacheDecorator extends DbProductRepository {

    /**
     * @var CacheInterface
     */
    protected $cache;


    /**
     * Construct
     * 
     * @param Product $product
     * @param CacheInterface $cache 
     */
    public function __construct(Product $product, CacheInterface $cache)
    {
        parent::__construct($product);
        $this->cache = $cache;
    }

    /**
     * All
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        $key = md5('products.getAll');

        if ($this->cache->has($key)) {
            return $this->cache->get($key);
        }

        $products = $this->model->all();

        $this->cache->put($key, $products);

        return $products;
    }

    /**
     * Find
     *
     * @param int $id
     * @return Illuminate\Database\Eloquent\Model
     */
    public function getById($id)
    {
        $key = md5('products.id.' . $id);

        if ($this->cache->has($key)) {
            return $this->cache->get($key);
        }

        $products = $this->model->find($id);

        $this->cache->put($key, $products);

        return $products;
    }
    
    public function getFeatured()
    {
        $key = md5('products.home.feat');

        if ($this->cache->has($key)) {
            return $this->cache->get($key);
        }

        $products = parent::getFeatured();

        $this->cache->put($key, $products);

        return $products;
    }
    



}