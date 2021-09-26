<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Freight;

class FreightDetails extends Model
{
    //

    protected $fillable = [
        'freight_id','date','note','description','current_status','current_destination','time',
    ];

    public function freight(){
        return $this->belongsTo(Freight::class);
    }
}
