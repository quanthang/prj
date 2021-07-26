<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apartment extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'price',
        'general_information',
        'details',
        'thumbnail',
        'status'
    ];
}
