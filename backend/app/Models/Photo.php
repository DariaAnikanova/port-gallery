<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'description',
        'img',
        'date',
        'featured',
    ];
}
