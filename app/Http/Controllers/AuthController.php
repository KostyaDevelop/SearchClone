<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Request;

class AuthController
{

    public function login(Request $request)
    {
        $credentials['email'] = $request->get('email');
        $credentials['password'] = $request->get('password');

//        Auth::validate($credentials);
        Auth::login(
            Auth::getProvider()->retrieveByCredentials($credentials)
        );

        return redirect('/personal-cabinet');
    }

    public function register(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required|regex:/^.+\@.+\..+$/',
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[-,.*+_])/'
            ]
        ]);

        dd($validator);
        if ($validator->fails()){
            return redirect('registration')
                ->withErrors($validator)
                ->withInput();
        }
//        $user = User::create($request->validated());
        $data['email'] = $request->get('email');
        $data['password'] = $request->get('password');

        $user = User::create($data);

        auth()->login($user);

        return route('personal_cabinet');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('/');
    }
}
