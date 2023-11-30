<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    
    public function index()
    {
        $users = User::orderBy('surname')->paginate(10);
        return view('admin.users.index', compact('users'));
    }
    
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return redirect()->route('admin.users.index');
    }

    public function create()
    {
        return view('admin.users.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'surname' => ['required', 'string'],
            'patname' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'min:8'],
            'is_admin' => ['nullable', 'boolean']
        ]);
    
        $user = new User;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->patname = $request->patname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password); // Хеширование пароля
        $user->is_admin = $request->has('is_admin') ? $request->is_admin : 0;
        $user->save();
        return redirect()->route('admin.users.index');
    }
    

    public function destroy(User $user)
{
    $user->delete();
    return redirect()->route('admin.users.index');
}


}
