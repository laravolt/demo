<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Writer extends User
{
    protected $table = 'users';
    use HasFactory;
}
