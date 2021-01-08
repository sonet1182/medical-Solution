<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";

    protected $fillable = [
        'group_id',
        'name',
        'status',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class,'group_id','id');
    }
}