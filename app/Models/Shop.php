<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Shop extends Model
{
    protected $fillable = [
        'name',
        'logo',
        'address',
        'phone',
        'map',
        'vendor_id',
    ];
    public function vendor(): BelongsTo
    {
        return $this->belongsTo(Vendor::class);
    }
}
