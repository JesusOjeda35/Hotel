<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'documentNumber',
        'address',
        'phone',
        'email',
    ];

    public function registrations()
    {
        // Asumo que la FK en la tabla registrations es employee_id
        return $this->hasMany(Registration::class, 'employee_id');
    }
}