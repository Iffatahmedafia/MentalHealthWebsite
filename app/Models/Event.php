<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

  
    

   /* public function favorite(){
    
        return $this->belongsTo(Like::class,'id','eid');
    }

    public function like(){
    
        return $this->favorite()->selectRaw('eid,count(*) as count')-groupBy('eid');
    }*/
}
