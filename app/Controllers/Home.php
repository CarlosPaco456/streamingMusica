<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
        //return view('index') . view('header') . view('footer');
        
    }
}
