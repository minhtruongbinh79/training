<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleEloquentUser extends Model
{
    use HasFactory;

    public $table = 'role_eloquent_user';

    public $fillable = ['eloquent_user_id', 'role_id'];
}
