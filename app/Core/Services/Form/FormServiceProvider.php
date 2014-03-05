<?php namespace Core\Services\Form;

/**
 * https://github.com/fideloper/Implementing-Laravel/tree/develop/app/Impl/Service/Form 
 */
use Illuminate\Support\ServiceProvider;
use Core\Services\Form\Product\ProductForm;
use Core\Services\Form\Product\ProductFormValidator;

class FormServiceProvider extends ServiceProvider {

    /**
     * Register the binding
     *
     * @return void
     */
    public function register()
    {
        $app = $this->app;

        $app->bind('Core\Services\Form\Product\ProductForm', function($app)
        {
            return new ProductForm(
                new ProductFormValidator( $app['validator'] ),
                $app->make('Core\Repos\Product\ProductRepository')
            );
        });
    }

}