<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    //this function allows you to do the $role->users which will return all users for that role
    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'user_role');
    }
}