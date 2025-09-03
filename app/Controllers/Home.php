<?php

namespace App\Controllers;

class Home extends BaseController
{
 HEAD
    public function index()
    {
        return view('template'); // this should match a view file like app/Views/template.php
    }
}

    public function index(): string
    {
        return view('welcome_message');
    }
}
 3125aa9 (Added database migrations and seeders)
