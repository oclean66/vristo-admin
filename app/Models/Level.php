<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Level extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable
     *
     * @var array<int, string>
     */
    protected $fillable = ['name'];

    /**
     * Get all of the accounts for the Level
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<\App\Models\Account>
     */
    public function accounts(): HasMany
    {
        return $this->hasMany(Account::class, 'levels_id');
    }
}
