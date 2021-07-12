<?php

namespace App\Optional\Books\Services;
use App\Models\Book;

trait Create
{
    public function Create($data){
        $book = Book::create([
            'name' => $data['name'],
            'author_id' => $data['author_id'],
            'page_count' => $data['page_count'],
        ]);

        return $book->save();
    }
}
