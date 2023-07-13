<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'tax_payer_id',
        'company_name',
        'company_address',
        'salary',
    ];

    public function tax_payer(){
        return $this->belongsTo(TaxPayer::class);
    }
}
