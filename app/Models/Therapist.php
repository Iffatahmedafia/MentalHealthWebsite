<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Therapist extends Model
{
    use HasFactory;
    public function setFieldAttribute($value)
    {
        $this->attributes['field'] = json_encode($value);
      
    }
    public function setStypeAttribute($value)
    {
      
        $this->attributes['stype'] = json_encode($value);
    }
    public function setAgeAttribute($value)
    {
       
        $this->attributes['age'] = json_encode($value);
    }

    public function getFieldAttribute($value)
    {
       return $this->attributes['field'] = json_decode($value);
      
      
    }
    public function getStypeAttribute($value)
    {
      
       return $this->attributes['stype'] = json_decode($value);
      
      
    }
    public function getAgeAttribute($value)
    {
     
       return $this->attributes['age'] = json_decode($value);
      
    }
}
