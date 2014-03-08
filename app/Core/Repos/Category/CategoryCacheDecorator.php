<?php namespace Core\Repos\Category;

use Core\Services\Cache\CacheInterface;

class CategoryCacheDecorator extends AbstractCategoryDecorator {

    /**
     * @var CacheInterface
     */
    protected $cache;


    /**
     *
     * @param ProductRepository $product
     * @param CacheInterface $cache 
     */
    public function __construct(CategoryRepository $category, CacheInterface $cache)
    {
        parent::__construct($category);
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

        $categories = $this->model->all();

        $this->cache->put($key, $categories);

        return $categories;
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
    
    public function getBySlug($slug)
    {
        $key = md5('categories.slug.' . $slug);

        if ($this->cache->has($key)) {
            return $this->cache->get($key);
        }

        $categories = $this->model->getBySlug($slug);

        $this->cache->put($key, $categories);

        return $categories;
    }
    
    public function getFeatured()
    {
        $key = md5('products.home.feat');

        if ($this->cache->has($key)) {
            return $this->cache->get($key);
        }

        $products = $this->model->getFeatured();

        $this->cache->put($key, $products);

        return $products;
    }
    



}