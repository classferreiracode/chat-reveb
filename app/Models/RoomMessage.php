<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomMessage extends Model
{
    protected $fillable = [
        'from_id',
        'room_id',
        'message_id',
    ];

    use HasFactory;
}

