<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    protected $fillable = ['item_id','product_id','assigned_to','assigned_at','del_flag','deleted_by','return_date','belongs_to'];
    
}
