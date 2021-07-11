<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Optional\Accounts\IBook;

class BookController extends Controller
{

    private $_book;

    public function __construct(IBook $book){
        $this->_book = $book;
    }

    public function create(){
        $result = $this->_book->Create();
        return $result;
    }

}
