<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EloquentUser extends Model
{
    use HasFactory;

    public $table = 'eloquent_users';

    public $primary_key = 'id';

    public $fillable = ['first_name', 'last_name'];

    public $timestamps = false;
    
    public function phone() {
        return $this->hasOne(Phone::class);
    }

    public function roles() {
        return $this->belongsToMany(Role::class, 'role_eloquent_user');
    }
}
