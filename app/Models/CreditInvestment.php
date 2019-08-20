<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class CreditInvestment extends Model
{
    protected $fillable = [
        'user_id',
        'credit_id',
        'amount',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function credit()
    {
        return $this->belongsTo(Credit::class, 'credit_id');
    }
}
