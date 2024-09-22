<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function Laravel\Prompts\password;

class Users extends Model
{
    use HasFactory;
    protected $table = 'members';

    protected $fillable = ['name', 'email', 'password'];
}
