<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreightOffer extends Model
{
    use HasFactory;
    /**
     *1 The table associated with the model.
     *
     * @var string
     */
    protected $table = 'freight_offer';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';


    protected $fillable = [
        'transport_annoucement_id',
        'price',
        'weight',
        'description',
        'status',
    ];
}
