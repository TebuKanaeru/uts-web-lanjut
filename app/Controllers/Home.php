<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('welcome_message');
        
    }

    public function about()
    {
        echo view('about');
    }

    public function education()
    {
        echo view('education');
    }
}
