<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PaymentMethod extends Model
{
    use HasFactory;

    protected $fillable = ['number', 'banks_id'];

    protected $table = 'payment_method';

    public function bank(): BelongsTo
    {
        return $this->belongsTo(Bank::class, 'banks_id', 'id');
    }

    public function operations(): BelongsToMany
    {
        return $this->belongsToMany(Account::class, 'operations', 'payment_method_id');
    }
}
