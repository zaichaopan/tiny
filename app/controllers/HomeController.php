<?php
namespace App\Controllers;

class HomeController
{
    public function index()
    {
       $title = 'home';
       return view('home', ['title' => $title]);
       // return redirect('about');
    }
}
