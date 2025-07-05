<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
     use HasFactory;

    protected $fillable = [
        'user_id',
        'package_name',
        'price',
        'quantity',
    ];

    // Optional relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
