<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\User\AuthService;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $rules = ['captcha' => 'required|captcha'];
        $validator = validator()->make(request()->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->with('errorAuth', 'Некоректная капча');
        }

        $credentials = $request->only('email','password');

        AuthService::login($credentials);
    }
}
