<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    public function getTrainInTime(){
        ($this->in_time) ? $result = "Si" : $result = "No";
        return $result;        
    }
    public function getTrainDeleted(){
        ($this->deleted) ? $result = "Si" : $result = "No";
        return $result;        
    }
}