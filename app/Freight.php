<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\FreightDetails;

class Freight extends Model
{
    //
    protected $fillable = [
        'tracking_number', 'final_destination', 'product_features', 'postal_product','sender','sender_address','receiver','receiver_address',
    ];

    public function details(){
        return $this->hasMany(FreightDetails::class)->latest();
    }
}
