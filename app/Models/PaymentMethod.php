<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    protected $fillable = ['number', 'banks_id'];
    
    protected $table = 'payment_method';

    public function bank()
    {
        return $this->belongsTo(Bank::class, 'banks_id', 'id');
    }

    public function operations()
    {
        return $this->belongsToMany(Account::class, 'operations', 'payment_method_id');
    }
}
