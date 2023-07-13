<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'tax_payer_id',
        'name',
        'address',
        'gross_income',
        'expenditures',
    ];

    public function tax_payer(){
        return $this->belongsTo(TaxPayer::class);
    }
}
