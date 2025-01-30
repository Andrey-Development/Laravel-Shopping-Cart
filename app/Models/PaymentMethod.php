<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PaymentMethod extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'discount',
        'interest_month',
        'name',
        'parcels',
    ];

    public function paymentType(): HasOne
    {
        return $this->hasOne(PaymentType::class);
    }
}
