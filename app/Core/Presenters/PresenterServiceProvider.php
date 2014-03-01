<?php namespace Core\Presenters;

use Illuminate\Support\ServiceProvider;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * http://culttt.com/2014/02/10/using-view-composers-laravel-4/
 */

/**
 * Description of PresenterServiceProvider
 *
 * @author luca
 */
class PresenterServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->bind(
                'Core\Services\Cache\CacheInterface',
                'Core\Services\Cache\LaravelCache'
                );
        
        $this->app->view->composer('products.*', 'Core\Presenters\ProductPresenter');
        
    }


}

?>
