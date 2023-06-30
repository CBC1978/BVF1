<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contract';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fk_freight_announcement_id',
        'fk_transport_offer_id',
        'agreement_date',
    ];

    /**
     * Get the freight announcement 
     */
    public function freightAnnouncement()
    {
        return $this->belongsTo(FreightAnnouncement::class, 'fk_freight_announcement_id');
    }

    /**
     * Get the transport offer 
     */
    public function transportOffer()
    {
        return $this->belongsTo(TransportOffer::class, 'fk_transport_offer_id');
    }
}
