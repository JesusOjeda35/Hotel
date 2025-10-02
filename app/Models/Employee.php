<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'Employees';
    protected $primaryKey = 'id';
    protected $fillable = [
    'name',
    'documentNumber',
    'address',
    'phone',
    'email'
    ];
    public function Registrations()
    {
    return $this->hasMany(Registration::class, 'employees_id');
    }
}
