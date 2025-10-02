<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;
    protected $table = 'paymentmethods';
    protected $primaryKey = 'id';
    protected $fillable = [
    'name',
    'description'
    ];
    public function Invoices()
    {
    return $this->hasMany(Invoice::class, 'paymentmethods_id');
    }
}
