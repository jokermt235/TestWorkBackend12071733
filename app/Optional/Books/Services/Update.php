<?php

namespace App\Optional\Books\Services;
use App\Models\Book;

trait Update
{
    public function Update($data){
        $book = Flight::find($data['id'])->update($data);
        return $book;
    }
}
