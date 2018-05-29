<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = "members";
    protected $primaryKey = "username";

    protected $fillable = ['username','password','email','nama','alamat','status','created_at','updated_at'];
}
