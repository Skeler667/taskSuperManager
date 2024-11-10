<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $guarded = false;

    protected $casts = [
        'taskId' => 'array',
    ];
    protected $fillable = [
        'name',
        'email',
        'password',
        'taskId',
    ];


    // связать с таксками
}
