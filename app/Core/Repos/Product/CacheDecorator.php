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
     * @param UserRepository $user
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
        $key = md5('all');

        if ($this->cache->has($key)) {
            dd($this->cache->get($key));
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
        $key = md5('id.' . $id);

        if ($this->cache->has($key)) {
            dd($this->cache->get($key));
            return $this->cache->get($key);
        }

        $products = $this->model->find($id);

        $this->cache->put($key, $products);

        return $products;
    }

}