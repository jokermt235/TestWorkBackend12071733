<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Optional\Books\IBook;
use App\Optional\Books\Book;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IBook::class, Book::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
