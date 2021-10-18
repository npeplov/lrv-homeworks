<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $table = 'cars';
    protected $fillable = [
        'brand',
        'model',
        'price',
    ];

//    protected $hidden = [
//        'created_at',
//        'updated_at',
//    ];
//    use HasFactory;
}
