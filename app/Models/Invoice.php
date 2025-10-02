<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = 'invoices';
    protected $primaryKey = 'id';
    protected $fillable = [
    'registration_id',
    'payment_method_id',
    'date',
    'total',
    'state'
    ];
    // Relación con registration (uno a uno)
    public function registration()
    {
    return $this->hasOne(Registration::class);
    }
    // Relación con DetalleFactura (uno a muchos)
    public function paymentmethod()
    {
    return $this->belongsTo(PaymentMethod::class);
    }

}
