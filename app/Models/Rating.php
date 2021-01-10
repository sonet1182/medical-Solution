<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pro_id',
        'ratings',
        'review',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function pro()
    {
        return $this->belongsTo(sub_Category::class,'pro_id','id');
    }
}