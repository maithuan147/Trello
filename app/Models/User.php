<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;
    //protected $table = 'users';
    protected $fillable = [
    	'username','password','image','email','status',
    ];
    public function role(){
        return $this->belongsTo(Role::class);
    }
}
