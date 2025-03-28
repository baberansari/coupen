<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    public function store()
    {
       return $this->belongsTo(Store::class,'store_id');
    }
    public function views()
    {
       return $this->hasMany(CoupenView::class,'offer_id');
    }

    public function offerused()
    {
        return $this->hasMany(CoupenUsed::class,'offer_id');
    }
}
