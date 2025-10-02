<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $table = 'registrations';
    protected $primaryKey = 'id';
    protected $fillable = [
    'employee_id',
    'room_id',
    'client_id',
    'checkindate',
    'checkoutdate',
    'checkintime',
    'checkouttime'
    ];
    // Relación con Cliente (muchos a uno)
    public function client()
    {
    return $this->belongsTo(Client::class);
    }
    // Relación (uno a uno)
    public function Invoices()
    {
    return $this->hasOne(Invoice::class);
    }
    // Relación (uno a muchos)
    public function employee()
    {
    return $this->belongsTo(Employee::class);
    }
    public function room()
    {
    return $this->belongsTo(Room::class);
    }
}
