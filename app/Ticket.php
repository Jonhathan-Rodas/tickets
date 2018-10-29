<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['service_id', 'code'];

    public function service()
    {
        return $this->belongsTo('App\Service');
    }

    public function total()
    {
        $this->service->sum('sale_price');
    }
}
