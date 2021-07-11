<?php

namespace App\Optional\Books;

use App\Optional\Books\Services\Create;
use App\Optional\Books\Services\Update;
use App\Optional\Books\Services\Get;

class Book implements IBook{
    use Create,Update,Get;
}
