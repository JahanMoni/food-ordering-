<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $guarded=[];  

    public function orderDetails()
    {
        return $this->hasMany(order_details::class,'order_id','id');
    }


  public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function item()
    {
        return $this->belongsTo(Item::class,'item_id','id');
    }

}
