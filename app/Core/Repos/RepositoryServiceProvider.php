<?php namespace Core\Repos;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RepositoryServiceProvider
 *
 * @author luca
 */
use Product;
use Core\Repos\Product\CacheDecorator;
use Core\Repos\Product\ProductRepository;
use Core\Repos\Product\DbProductRepository;
use Core\Services\Cache\LaravelCache;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider {

    public function register()
    {
        /*
        $this->app->bind(
                'Core\Repos\Product\ProductRepository',
                'Core\Repos\Product\DbProductRepository'
                );*/

        $this->app->bind('Core\Repos\Product\ProductRepository',function($app){
            $product = new DbProductRepository(new Product);
            return new CacheDecorator(
                    $product,
                    new LaravelCache($app['cache'], 'product')
                    );
        });

    }

}