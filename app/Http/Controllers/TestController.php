<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class TestController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view("templates.sidebar-one");
    }
}
