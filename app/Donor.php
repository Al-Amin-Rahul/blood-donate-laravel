<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $fillable=['name','bloodGroup','mobile','email','address','availability'];
}
