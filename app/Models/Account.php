<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Account extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'parent_id',
        'code',
        'title',
        'subtitle',
        'country',
        'email',
        'document',
        'address',
        'fullname',
        'state',
        'phone',
        'mobile',
        'currencies_id',
        'levels_id',
        'category_id',
    ];

    /**
     * Get all of the users for the Account
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<\App\Models\User>
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'accounts_id');
    }

    /**
     * Get the currency that owns the Account
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\App\Models\Currency, \App\Models\Account>
     */
    public function currency(): BelongsTo
    {
        return $this->belongsTo(Currency::class, 'currencies_id');
    }

    /**
     * Get the level that owns the Account
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\App\Models\Level, \App\Models\Account>
     */
    public function level(): BelongsTo
    {
        return $this->belongsTo(Level::class, 'levels_id');
    }

    /**
     * Get all of the clients for the Account
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<\App\Models\Client>
     */
    public function clients(): HasMany
    {
        return $this->hasMany(Client::class, 'accounts_id');
    }

    /**
     * The operations that belong to the Account
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<\App\Models\PaymentMethod>
     */
    public function operations(): BelongsToMany
    {
        return $this->belongsToMany(PaymentMethod::class, 'operations', 'accounts_id');
    }

    /**
     * Get the category that owns the Account
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\App\Models\Category, \App\Models\Account>
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // recursive queries
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<\App\Models\Account>
     */
    public function parents(): HasMany
    {
        return $this->hasMany(Account::class, 'parent_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<\App\Models\Account>
     */
    public function children(): HasMany
    {
        return $this->hasMany(Account::class, 'parent_id')->with('parents');
    }
}
