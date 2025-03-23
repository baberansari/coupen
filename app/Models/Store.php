<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    public function faqs(){
        return $this->hasMany(Faq::class,'store_id','id');
    }

    public function code()
    {
        return $this->hasMany(Offer::class,'store_id','id')->where('offer_type','code');
    }
    public function deal()
    {
        return $this->hasMany(Offer::class,'store_id','id')->where('offer_type','deal');
    }
}
