<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    
    protected $fillable = ['seller_id', 'total', 'commission'];

    protected $dates = [
        'created_at',
    ];

    /**
     * Get the seller associated with the sale.
     */
    public function seller()
    {
        return $this->hasOne(Seller::class, 'id', 'seller_id');
    }
}
