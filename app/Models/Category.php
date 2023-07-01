<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'description', 'parent_id'];

    /**
     * Get all of the accounts for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<\App\Models\Account>
     */
    public function accounts(): HasMany
    {
        return $this->hasMany(Account::class, 'category_id');
    }
}
