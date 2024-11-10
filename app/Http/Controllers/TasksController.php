<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class TasksController extends Controller
{
    public function index()
    {
        return Tasks::all();
    }

    public function show($id)
    {
        return Tasks::findorFail($id);
    }

    public function destroy(Tasks $user)
    {
        $user->delete();
        return response(ResponseAlias::HTTP_OK);
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        return Tasks::create($data);
    }

    public function update(UpdateRequest $request, Tasks $user)
    {
        $tasks->update($request->validated());
        return $tasks;
    }
}
