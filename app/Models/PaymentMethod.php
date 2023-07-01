<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PaymentMethod extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable
     *
     * @var array<int, string>
     */
    protected $fillable = ['number', 'banks_id'];

    /**
     * The table that are binding
     *
     * @var string
     */
    protected $table = 'payment_method';

    /**
     * Get the bank that owns the PaymentMethod
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\App\Models\Bank, \App\Models\PaymentMethod>
     */
    public function bank(): BelongsTo
    {
        return $this->belongsTo(Bank::class, 'banks_id', 'id');
    }

    /**
     * The operations that belong to the PaymentMethod
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<\App\Models\Account>
     */
    public function operations(): BelongsToMany
    {
        return $this->belongsToMany(Account::class, 'operations', 'payment_method_id');
    }
}
