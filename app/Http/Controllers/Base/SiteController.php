<?php

namespace App\Http\Controllers\Base;

use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    //Статика ниже
    public function contacts()
    {
        return view('pages.index');
    }

    public function offert()
    {
        return view('pages.offert');
    }

    public function political()
    {
        return view('pages.political');
    }
}
