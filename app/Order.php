<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['name','email','type','orginal','destination','moving_date','flexibility'];
}
