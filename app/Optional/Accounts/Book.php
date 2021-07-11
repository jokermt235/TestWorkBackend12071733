<?php

namespace App\Optional\Accounts;

use App\Optional\Accounts\Services\Create;
use App\Optional\Accounts\Services\Update;


class Book implements IBook{
    use Create,Update;
}
