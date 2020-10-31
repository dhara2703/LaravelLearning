<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    public function room()
    {
        // One to one relationship
        return $this->hasOne('App\Room');
    }

    public function rooms()
    {
        // one to many relationships
        return $this->hasMany('App\Room', 'id', 'room_type_id');
    }
}
