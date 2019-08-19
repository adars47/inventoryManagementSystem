<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class assigned extends Model
{
    protected $fillable = ['assignment_id','item_id','user_id','assigned_by','assigned_at','return_date','status','del_flag','deleted_by'];
}
