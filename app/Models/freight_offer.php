<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class freight_offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'transport_annoucement_id',
        'price',
        'weight',
        'description',
        'status',
    ];
}
