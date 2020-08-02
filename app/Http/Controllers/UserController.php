<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{

    public function show(User $user)
    {
        return view('users.show', [
            'user' => $user
        ]);
    }

    public function edit(User $user)
    {
        if ($user->id !== Auth::id()) {
            return abort(404);
        }

        return view('users.edit', [
            'user' => $user
        ]);
    }

    public function update(User $user, Request $request)
    {

    }

}
