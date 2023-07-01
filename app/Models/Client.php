<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Client extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'password',
        'state',
        'email',
        'phone',
        'mobile',
        'numbers',
        'accounts_id',
    ];

    /**
     * Get the account that owns the Client
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\App\Models\Account, \App\Models\Client>
     */
    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class, 'accounts_id');
    }
}
