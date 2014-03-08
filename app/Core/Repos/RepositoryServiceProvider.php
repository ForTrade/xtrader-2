<?php namespace Core\Repos;

/**
 * Models 
 */
use Product;
use Category;

/**
 * Decorators 
 */
use Core\Repos\Product\ProductCacheDecorator;
use Core\Repos\Category\CategoryCacheDecorator;

/**
 * Product Repository 
 */
use Core\Repos\Product\ProductRepository;
use Core\Repos\Product\DbProductRepository;

/**
 * Category Repository 
 */
use Core\Repos\Category\CategoryRepository;
use Core\Repos\Category\DbCategoryRepository;

use Core\Services\Cache\LaravelCache;
use Illuminate\Support\ServiceProvider;

/**
 * 
 */
class RepositoryServiceProvider extends ServiceProvider {

    public function register()
    {

        $this->app->bind('Core\Repos\Product\ProductRepository',function($app){
            $product = new DbProductRepository(new Product);
            return new ProductCacheDecorator(
                    $product,
                    new LaravelCache($app['cache'], 'product')
                    );
        });
        
        $this->app->bind('Core\Repos\Category\CategoryRepository',function($app){
            $category = new DbCategoryRepository(new Category);
            return new CategoryCacheDecorator(
                    $category,
                    new LaravelCache($app['cache'], 'category')
                    );
        });

    }

}