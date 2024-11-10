<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequests\StoreRequest;
use App\Http\Requests\UserRequests\UpdateRequest;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class UserController
{
    // crud create read/read{id}+ update delete+
    public function index()
    {
        return User::all();
    }

    public function show($id)
    {
        return User::findorFail($id);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response(ResponseAlias::HTTP_OK);
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        return User::create($data);
    }

    public function update(UpdateRequest $request, User $user)
    {
        $user->update($request->validated());
        return $user;
    }
}
