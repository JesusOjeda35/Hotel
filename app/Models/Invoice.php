<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
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
        'state',
    ];

    // Una factura pertenece a una reserva/registro (registration)
    public function registration()
    {
        return $this->belongsTo(Registration::class, 'registration_id');
    }

    // Una factura pertenece a un método de pago
    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class, 'payment_method_id');
    }
}