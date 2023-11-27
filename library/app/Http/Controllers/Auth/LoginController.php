<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class LoginController extends Controller
{
    public function create()
    {

        return view('auth.login');
    }


    public function store(Request $request)
    {

        //validation
        $credentials = $request->validate([

            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string']

        ]);

        if (! Auth::attempt($credentials, $request->boolean('remember'))) {
            return back()
            ->withInput()
            ->withErrors([
                'email' => trans('auth.failed')
            ]);

        }

        // Регенерация ID сессии
        $request->session()->regenerate();

    // Проверка роли пользователя
        if (Auth::user()->is_admin) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('user.dashboard');

    }

    public function destroy(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('welcome');
    }

}