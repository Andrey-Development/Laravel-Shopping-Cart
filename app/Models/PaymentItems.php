<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Number;

class PaymentItems extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'quantity',
        'unit_price',
    ];

    public function payment(): HasOne
    {
        return $this->hasOne(Payment::class);
    }

    public function product(): HasOne
    {
        return $this->hasOne(Product::class);
    }
}
