<?php

namespace App\Optional\Books\Services;

trait Get
{
    public function Get(string $pattern){
        dd("Hello from $pattern");
    }
}
