<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function dashboard(): string
    {
        return view('pages/dashboard');
    }
    public function dev(): string
    {
        return view('pages/home');
    }
}
