<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // 引入 User model

class UserController extends Controller
{
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $this->authorize('update', $user);
        $user->update($request->only('name', 'email'));
        return redirect()->route('users.show', $user);
    }

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
}
