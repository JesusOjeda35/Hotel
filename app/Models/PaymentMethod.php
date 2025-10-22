<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    // Usar el mismo nombre que la migration: payment_methods
    protected $table = 'payment_methods';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'description',
    ];

    // Relación con facturas. Ajusta la clave foránea si en tu migration de invoices
    // el campo se llama distinto (por ejemplo 'paymentmethods_id' o 'payment_method_id').
    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'payment_method_id');
    }
}