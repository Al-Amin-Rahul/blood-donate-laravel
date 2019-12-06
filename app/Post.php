<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['title','patientName','patientAge','bloodGroup','date','address','bloodUnit','mobile','city','hospitalName','time','details'];
}
