<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'username', 'password', 'state', 'email', 'phone', 'mobile', 'numbers', 'accounts_id'];

    public function account()
    {
        return $this->belongsTo(Account::class, 'accounts_id');
    }
}
