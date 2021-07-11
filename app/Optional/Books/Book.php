<?php

namespace App\Optional\Books;

use App\Optional\Books\Services\Create;
use App\Optional\Books\Services\Update;


class Book implements IBook{
    use Create,Update;
}
