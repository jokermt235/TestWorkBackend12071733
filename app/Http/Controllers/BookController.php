<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Optional\Books\IBook;

class BookController extends Controller
{

    private $_book;

    public function __construct(IBook $book){
        $this->_book = $book;
    }

    public function index(Request $request){
    }

    public function view(){
    }

    public function create(){
        $result = $this->_book->Create();
        return $result;
    }

    public function  update(Request $request){
        $this->_book->Update($request);
    }

}
