<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Request;

class AuthController
{

    public function login(Request $request)
    {
        $validator = $request->validate([
            'email' => [
                'required',
                Rule::exists('users', 'email')
            ]
        ]);

        if ($validator->fails()){
            return redirect('/login')
                ->withErrors($validator)
                ->withInput();
        }

        Auth::login(
            Auth::getProvider()->retrieveByCredentials([
                $request->get('email'),
                $request->get('password')
            ])
        );

        return redirect('/personal-cabinet');
    }

    public function register(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required|regex:/^.+\@.+\..+$/',
            'password' => [
                'required',
                'min:8',
                'regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[-,.*+_])/'
            ]
        ]);

        if ($validator->fails()){
            return redirect('registration')
                ->withErrors($validator)
                ->withInput();
        }

        $credentials['email'] = $request->get('email');
        $credentials['password'] = $request->get('password');

        auth()->login(
            User::create($credentials)
        );

        return route('personal_cabinet');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('/');
    }
}
