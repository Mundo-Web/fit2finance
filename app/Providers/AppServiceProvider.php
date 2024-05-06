<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\General;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('components.public.footer', function ($view) {
            // Obtener los datos del footer
            $blog = Blog::where('status','=' ,'1 ')->where('visible', '=','1')->get();
            $datosgenerales = General::all(); // Suponiendo que tienes un modelo Footer y un método footerData() en él
            // Pasar los datos a la vista

            $view->with(['datosgenerales' => $datosgenerales, 'blog' => $blog]);

        });
        View::composer('components.public.header',function($view){
            $blog = Blog::where('status','=' ,'1 ')->where('visible', '=','1')->get();
            $datosgenerales = General::all(); // Suponiendo que tienes un modelo Footer y un método footerData() en él
            // Pasar los datos a la vista

            $view->with(['datosgenerales' => $datosgenerales, 'blog' => $blog]);
        });
    }
}
