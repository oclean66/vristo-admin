<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bank extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable
     *
     * @var array<int, string>
     */
    protected $fillable = ['name'];

    /**
     * Get all of the payment methods for the Bank
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<\App\Models\PaymentMethod>
     */
    public function paymentMethods(): HasMany
    {
        return $this->hasMany(PaymentMethod::class, 'banks_id', 'id');
    }
}
