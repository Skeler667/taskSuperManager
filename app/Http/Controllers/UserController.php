<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function show($id)
    {
        return User::findOrFail($id);
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'nullable',
            'email_verified_at' => 'nullable',
            'password' => 'required',
            'id' => 'required',
        ]);
        $user = User::create($request->only(['name', 'email', 'password', 'id', 'email_verified_at']));
        return response()->json($user, 201);
    }

//$post = Post::create($request->only(['title', 'content']));

//return response()->json($post, 201);
}
