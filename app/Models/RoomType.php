<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;

    // coincide con la migration: room_types
    protected $table = 'room_types';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'description',
    ];

    // relación con rooms — dejo la FK por defecto (room_type_id)
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}