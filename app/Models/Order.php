<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'orderer_name',
        'inventory_id',
        'quantity',
        'lead_time',
        'used',
    ];

    public function inventory(): HasOne
    {
        return $this->hasOne(inventory::class, 'id', 'inventory_id');
    }
}
