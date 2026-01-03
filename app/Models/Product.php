<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = [
        'name',
        'image',
        'qty',
        'price',
        'discount',
        'description',
        'category_id',
        'vendor_id'
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function vendor(): BelongsTo
    {
        return $this->belongsTo(Vendor::class);
    }
    public function orderDescriptions(): HasMany
    {
        return $this->hasMany(OrderDescription::class);
    }
    public function carts(): HasMany
    {
        return $this->hasMany(Cart::class);
    }
}
