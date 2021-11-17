<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    use HasFactory;

    public function setFieldAttribute($value)
    {
        $this->attributes['field'] = json_encode($value);
    }

    public function getFieldAttribute($value)
    {
       return $this->attributes['field'] = json_decode($value);
    }
}
