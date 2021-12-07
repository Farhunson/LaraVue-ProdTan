<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    //
    protected $table = 'business';
    protected $fillable = ['name','business_name','email','website','phone','comments'];
}
