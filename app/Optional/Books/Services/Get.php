<?php

namespace App\Optional\Books\Services;
use App\Models\Book;
trait Get
{
    public function Get(string $pattern){
        return Book::where('name', $pattern);
    }
}
