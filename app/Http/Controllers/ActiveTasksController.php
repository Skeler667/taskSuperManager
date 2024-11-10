<?php

namespace App\Http\Controllers;

use App\Models\ActiveTasks;
use Illuminate\Http\Request;

class ActiveTasksController extends Controller
{
    // crud create read update delete

    public function index()
    {
        return ActiveTasks::all();
    }
}
