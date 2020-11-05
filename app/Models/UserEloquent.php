<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEloquent extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = ['name', 'email', 'password','roles_id'];


    public function getroles(){

    	return $this->belongsTo('App\Models\roles','roles_id','id');
    }


}
