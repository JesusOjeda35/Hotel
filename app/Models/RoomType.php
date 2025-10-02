<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;
    protected $table = 'roomtypes';
    protected $primaryKey = 'id';
    protected $fillable = [
    'name',
    'description'
    ];
    public function Rooms()
    {
    return $this->hasMany(Room::class, 'roomtypes_id');
    }
}
