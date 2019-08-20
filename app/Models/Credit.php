<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    protected $fillable = [
        'external_id',
        'type',
        'request_number',
        'period',
        'date',
    ];

    protected $hidden = [
        'request_number',
    ];
}
