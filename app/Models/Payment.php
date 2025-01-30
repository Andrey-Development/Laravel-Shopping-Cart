<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Payment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'delivery_status',
        'total_amount',
    ];

    public function paymentMethod(): HasOne
    {
        return $this->hasOne(PaymentMethod::class);
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'payment_items')
                    ->select([
                        'description',
                        'image',
                        'name',
                    ])
                    ->withPivot('quantity', 'unit_price')
                    ->withTimestamps();
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
