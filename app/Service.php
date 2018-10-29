<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name', 'description', 'sale_price'];

    public function tickets()
    {
        return $this->hasMany('App\Ticket');
    }
}
