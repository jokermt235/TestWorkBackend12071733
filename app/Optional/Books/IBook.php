<?php

namespace App\Optional\Books;

interface IBook{
    public function Create();
    public function Update();
    public function Get(string $pattern);
}
