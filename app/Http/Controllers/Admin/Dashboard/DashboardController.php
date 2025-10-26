<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller 
{
    public function index(Request $request)
    {
        return view("pages.admin.dashboard");
    }

    public function users(Request $request)
    {
        return view("pages.admin.users");
    }

    public function store(Request $request)
    {
        return view("pages.admin.store");
    }

    public function settings(Request $request)
    {
        return view("pages.admin.settings");
    }

    public function integrations(Request $request)
    {
        return view("pages.admin.integrations");
    }
}