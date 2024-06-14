<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        error_log("home");
        return view('home');
    }
}
