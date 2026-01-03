<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'shipping_address_id',
        'status',
        'total_amount',
        'payment_type',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function shippingAddress(): BelongsTo
    {
        return $this->belongsTo(ShippingAddress::class);
    }
    public function orderDescriptions(): HasMany
    {
        return $this->hasMany(OrderDescription::class);
    }
}
