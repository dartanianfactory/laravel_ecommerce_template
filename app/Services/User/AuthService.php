<?php

namespace App\Services\User;

use App\Models\User\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Log;

class AuthService
{
    public static function login($credetials)
    {
        try {
            $rules = [
                'email' => 'required|email',
                'password' => 'required',
            ];

            validator()->make($credetials, $rules);
        } catch (ValidationException $e) {
            return redirect()->back()->with('errorAuth', 'Ошибка. Проверьте email и пароль');
        }

        Log::info('USER TRY LOGIN: ', $credetials);

        if (
            Auth::attemptWhen($credetials, function(User $user) {
                if($user->isBanned()) {
                    Log::info('USER IS BANNED -> ', $user->email);
                    return false;
                }
                Auth::login($user);
                return true;
            })
        ) {
            request()->session()->regenerate();
            return redirect()->intended('/')->with('successAuth', 'С возвращением!');
        }

        return redirect()->back()->with('errorAuth', 'Неудалось войти.');
    }

    public static function register($credetials)
    {
        try {
            $rules = [
                'email' => 'required|email',
                'password' => 'required',
                'repeat_password' => 'required',
            ];
            validator()->make($credetials, $rules);
        } catch (ValidationException $e) {
            return redirect()->back()->with('errorAuth', 'Ошибка регистрации. Проверьте поля');
        }


        $user = User::create([
            'name' => $credetials['name'] ?? 'Без имени',
            'email' => $credetials['email'],
            'password' => Hash::make($credetials['password']),
        ]);

        Auth::login($user);

        return redirect('/')->with('successAuth', 'Добро пожаловать на проект!');
    }

    public static function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/')->with('successAuth', 'Вы вышли из аккаунта');
    }
}