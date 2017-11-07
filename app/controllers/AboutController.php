<?php

namespace App\Controllers;

class AboutController
{
    public function index()
    {
        return view('about', ['title' => 'This is about page']);
    }
}
