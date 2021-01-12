<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amb_id',
        'address',
        'date',
        'time',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}