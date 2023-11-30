<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function showDashboard()
{
    $user = Auth::user();
    return view('user.dashboard', ['user' => $user]);
}

public function showBooks(User $user)
{
    $bookIssues = $user->bookIssues()->paginate(10);

    return view('user.books', ['bookIssues' => $bookIssues]);
}

}
