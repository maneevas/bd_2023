<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {

        return view('auth.register');
    }


    public function store(Request $request)
    {

        //validation
        $request->validate([

            'name' => ['required', 'string'],
            'surname' => ['required', 'string'],
            'patname' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:8']

        ]);
        
        $user = User::create([

            'name' => $request->name,
            'surname' => $request->surname,
            'patname' => $request->patname,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);

    }
}
