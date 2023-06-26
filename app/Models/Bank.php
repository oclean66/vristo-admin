<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bank extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function paymentMethods(): HasMany
    {
        return $this->hasMany(PaymentMethod::class, 'banks_id', 'id');
    }
}
