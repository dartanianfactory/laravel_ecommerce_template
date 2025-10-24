<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CabinetController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(Request $request) 
    {
        return view("pages.user.cabinet");
    }
}
