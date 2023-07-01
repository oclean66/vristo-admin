<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Currency extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'code',
        'price',
    ];

    /**
     * Get all of the accounts for the Currency
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<\App\Models\Account>
     */
    public function accounts(): HasMany
    {
        return $this->hasMany(Account::class, 'currencies_id');
    }
}
