<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Optional\Accounts\IBook;
use App\Optional\Accounts\Book;

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
