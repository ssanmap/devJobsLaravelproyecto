<?php

namespace App\Providers;

use App\Categoria;
use Illuminate\Support\ServiceProvider;
Use View;
class CategoriasProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        View::composer('*', function($view){
            $categorias = Categoria::all();
            $view->with('categorias', $categorias);
        });
    }
}
