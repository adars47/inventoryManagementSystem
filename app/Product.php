<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['name','description','created_by','del_flag','deleted_by'];
    

}
