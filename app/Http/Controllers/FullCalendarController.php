<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;

class FullCalendarController extends Controller
{
  
 
    public function getEvent($id){
     
         
        $events = Event::where('id', '==', $id)->get(['id','title','date','time']);
      
        
        return view('frontend.eventCalender',['events'=>$events]);
        
    }
    public function createEvent(Request $request){
        $data = array_except($request->all(), ['_token']);
        $events = Event::insert($data);
        return response()->json($events);
    }
   
    public function deleteEvent(Request $request){
        $event = Event::find($request->id);
        return $event->delete();
    }
}

