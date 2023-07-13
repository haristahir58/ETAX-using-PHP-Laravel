<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomeTax extends Model
{
    use HasFactory;

    protected $fillable = [
        'tax_payer_id',
        'tax_year',
        'nationality',
        'address',
    ];

    public function tax_payer(){
        return $this->belongsTo(TaxPayer::class);
    }
}
