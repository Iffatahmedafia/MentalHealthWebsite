<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Appointments;
use App\Models\Therapist;
use App\Models\Specialist;
use App\Models\Flight;
use App\Models\User;
use App\Models\Event;
use App\Models\Blog;
use App\Models\Like;
use App\Models\Fav;
use Hash;
use DB;
use Mail;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
  private $userid;
  

    public function index()
    {
           
        $events = DB::select('select * from events');
        return view('frontend.index',['events'=>$events]);
       
    }
    public function about()
    {
        return view('frontend.about');
    }

    public function services()
    {
        
        return view('frontend.services');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function register()
    {
        return view('frontend.register');
    }
    public function login()
    {
        return view('frontend.login');
    }
    public function getEmail()
    {
        return view('frontend.email');
    }
    public function postEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(60);

        DB::table('password_resets')->insert(
            ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
        );

        Mail::send('auth.password.verify',['token' => $token], function($message) use ($request) {
                  $message->from($request->email);
                  $message->to('codingdriver15@gmail.com');
                  $message->subject('Reset Password Notification');
               });

        return back()->with('message', 'We have e-mailed your password reset link!');
    }
    public function landing($id)
    {
        $events = DB::select('select * from events');
       // $userid = User::where('id','=', $id)->first();
       $userid=$id;
        $likes = DB::select('select * from likes');
    
        return view('frontend.landing',['events'=>$events],['likes'=>$likes])->with('userid', $userid);
    }

    public function showaccount()
    {
        return view('frontend.account');
    }
    public function save(Request $request)
    {
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email|unique:admins',
            'username'=>'required',
            'password'=>'required|min:5|max:12'
            
        ]);

        $admin = new User;
        $admin->firstname = $request->firstname;
        $admin->lastname = $request->lastname;
        $admin->email = $request->email;
        $admin->username = $request->username;
        $admin->password = Hash::make($request->password);
        $save = $admin->save();

        if($save){
            return back()->with('success','New User has been successfully added to the database');

        }else{
            return back()->with('fail','Something went wrong, try again later');

        }
    }

        public function check(Request $request)
    {
        
        $request->validate([
            'username'=>'required',
            'password'=>'required|min:5|max:12',
            'type'=> 'required'
            
            
        ]);
        
        $type=$request->type;
       
       if($type=='user'){
        $userInfo = User::where('username','=', $request->username)->first();
        
        if(!$userInfo){
            return back()->with('fail','We donot recognize your username');
            
        }else{
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo);
             
                $events = DB::select('select * from events');
                $userid =$userInfo->id;
                $likes = DB::select('select * from likes');
             
                return view('frontend.landing',['events'=>$events],['likes'=>$likes])->with('userid', $userid);

            }else{
                return back()->with('fail','Incorrect Password');
                
            }
            

        }
        
       }
    
        else{
        $userInfo = Admin::where('username','=', $request->username)->first();
        if(!$userInfo){
            return back()->with('fail','We donot recognize your username');
            
        }else{
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo);
                return redirect()->route('dashboard');

            }else{
                return back()->with('fail','Incorrect Password');
                
            }
            

        }
        
    }
        
    


    
    }
    public function blog()
    {
        return view('frontend.therapist.blog');
    }
    public function blogs()
    {
        $blogs = DB::select('select * from blogs');
       // $userid = User::where('id','=', $id)->first();
       // $userid=$id;
        $favs = DB::select('select * from favs');
    
        //return view('frontend.blogs',['events'=>$events],['likes'=>$likes])->with('userid', $userid);
        return view('frontend.blogs',['blogs'=>$blogs],['favs'=>$favs]);
    }

    public function favs($bid)
    {
        if(!Fav::where(['bid'=>$bid])->exists()){
        //$user = User::findorFail($uid);
        $blog = Blog::findorFail($bid);
        $fav = new Fav;
        //$fav->uid = $user->id;
        $fav->bid = $blog->id;
        $fav->title = $blog->title;
        $fav->field = $blog->field;
      
        $favs = $fav->save();

        if($favs){
            return back();

        }else{
           echo 'Not Saved';

        }
    }
    }


    public function allevents()
    {
        return view('frontend.allevents');
    }

    public function event()
    {
        	
      return view('frontend.event');

    }

    public function add(Request $request)
    {

        
        $request->validate([
            'title'=>'required',
            'name'=>'required',
            'des'=>'required',
            'date'=>'required',
            'time'=>'required',
            
            
        ]);

        $event = new Event;
        $event->title = $request->title;
        $event->name = $request->name;
        $event->des = $request->des;
        $event->date = $request->date;
        $event->time = $request->time;
      
        $add = $event->save();
      
        if($add){
            return back()->with('success','New Event has been successfully added to the database');

        }else{
            return back()->with('fail','Something went wrong, try again later');

        }
       
        
    }
    public function likes($uid,$eid)
    {
        if(!Like::where(['eid'=>$eid,'uid'=>$uid])->exists()){
        $user = User::findorFail($uid);
        $event = Event::findorFail($eid);
        $like = new Like;
        $like->uid = $user->id;
        $like->eid = $event->id;
        $like->title = $event->title;
        $like->date = $event->date;
        $like->time = $event->time;
        $likes = $like->save();

        if($likes){
            return back();

        }else{
           echo 'Not Saved';

        }
    }
    }

    public function regtherapist()
    {
        $items=array ();	
        return view('frontend.therapist.register');

    }
    public function showfield(){
    
        $fields = DB::select('select field from specialists');
         
        foreach ($fields as $field)   {
       
            foreach (json_decode($field->field,true) as $field1){
            
            
              if ($field1=="Depression" || $field1=="Trauma"){
              
              echo "Hi";
                }
              else{
                   echo "Bye";
              }
              
            }

           
        }
    }
    

    public function therapists(Request $request)
    {
        $therapist = new Therapist;
        //$fav->uid = $user->id;
        $therapist->name = $request->name;
        $therapist->gender = $request->gender;
        $therapist->field = $request->field;
        $therapist->sformat = $request->sformat;
        $therapist->stype = $request->stype;
        $therapist->start = $request->start;
        $therapist->end = $request->end;
        $therapist->age = $request->age;
        $therapist->email = $request->email;
        $therapist->phone = $request->phone;
        $therapist->username = $request->username;
        $therapist->pass = Hash::make($request->password);
       
     
      
       
      
       $therapists = $therapist->save();

       
      
        if($therapists){
            return back()->with('success','New Event has been successfully added to the database');
            
           

        }else{
            return back()->with('fail','Something went wrong, try again later');

       }
    }
    

   

    public function logout(Request $request)
    {
        
		
			$request->session()->forget('LoggedUser');
		

			return redirect()->route('index');

		
        
    }


    public function dashboard(){
        $userCount = User::count();
        $appCount = Appointments::count();
        $therapistCount = Therapist::count();
        return view('frontend.admin.dashboard', compact('userCount','appCount','therapistCount'));
       
    }

    
    public function showusers(){
        $users = DB::select('select * from users');
        return view('frontend.admin.users',['users'=>$users]);
       
        }
       
    
    public function showtherapists(){
      
        $therapists = DB::select('select * from therapists');
        return view('frontend.admin.therapists',['therapists'=>$therapists]);
           
         }


    public function showapp(){
        $app = DB::select('select * from appointments');
        return view('frontend.admin.appointments',['app'=>$app]);
       
        }
       

        public function takeapp($id)
        {
           $app = Therapist::find($id);

           
           
       
              return view('frontend.takeappointment', compact('app','id'));
   
             
        


        }


        public function checkdate(Request $request){

            $request->validate([
                'name'=>'required',
                'username'=>'required',
                'email'=>'required|email',
                'date'=>'required|date',
               
                
                
               
             
                
            ]); 

           
            $app1=$request->Sid;
            $app2=$request->date;
            $app3=$request->Sname;
            $app4=$request->name;
            $app5=$request->username;
            $app6=$request->email;
            

            $appointments = Flight::where('Sid', $app1)->where('date', $app2)->get();
                      if($appointments){
                       echo $appointments;
                       
                   }else{
                       
           
                      echo 'Incorrect';
                           
                       }
           
            
                       $starttime = '9:00';  // your start time
$endtime = '17:00';  // End time
$duration = '30';  // split by 30 mins

$array_of_time = array ();
$start_time    = strtotime ($starttime); //change to strtotime
$end_time      = strtotime ($endtime); //change to strtotime

$add_mins  = $duration * 60; // seconds

while ($start_time <= $end_time) // loop between time
{
 $array_of_time[] = date ("h:i", $start_time);
 $start_time += $add_mins; // to check endtie=me
 
}

// Here I am getting the indexes of the time slot which has appointment

$new_array_of_time = array ();
for($i = 0; $i < count($array_of_time) - 1; $i++)
{
    $new_array_of_time[] = '' . $array_of_time[$i] . ' - ' . $array_of_time[$i + 1];
}

$indexes_to_be_skipped = array();
// Here I am getting the indexes of the time slot which has appointment
$indexes_to_be_skipped = array();
foreach($appointments as $appointment) {
  for($i=0; $i < count($new_array_of_time); $i++) {
    if($new_array_of_time[$i] == ($appointment['time'])) {
      $indexes_to_be_skipped[$i] = $i;
    }
  }
}
for($i = 0; $i < count($array_of_time) - 1; $i++){
  // check if current time slot has already appointment
  if(isset($indexes_to_be_skipped[$i])) {
    // then remove it
    unset($new_array_of_time[$i]);
  }
}


// resetting index
$narray_of_time = $new_array_of_time;
$new_array_of_time = array();
foreach($narray_of_time as $item) {
  $new_array_of_time[] = $item;
  
}                 
return view ('frontend.takeappointment2',compact('app1','app2','app3','app4','app5','app6','new_array_of_time'));



        }

       /* public function storeapp(Request $request){
            switch ($request->input('submit')) {
                case 'Select':

                    
            $request->validate([
                'name'=>'required',
                'username'=>'required',
                'email'=>'required|email',
                'date'=>'required|date',
               
                
                
               
             
                
            ]); 

           
            $app1=$request->Sid;
            $app2=$request->date;
            

            $appointments = Flight::where('Sid', $app1)->where('date', $app2)->get();
                      if($appointments){
                       echo $appointments;
                       
                   }else{
                       
           
                      echo 'Incorrect';
                           
                       }
           
            
                       $starttime = '9:00';  // your start time
$endtime = '17:00';  // End time
$duration = '30';  // split by 30 mins

$array_of_time = array ();
$start_time    = strtotime ($starttime); //change to strtotime
$end_time      = strtotime ($endtime); //change to strtotime

$add_mins  = $duration * 60; // seconds

while ($start_time <= $end_time) // loop between time
{
 $array_of_time[] = date ("h:i", $start_time);
 $start_time += $add_mins; // to check endtie=me
 
}

// Here I am getting the indexes of the time slot which has appointment

$new_array_of_time = array ();
for($i = 0; $i < count($array_of_time) - 1; $i++)
{
    $new_array_of_time[] = '' . $array_of_time[$i] . ' - ' . $array_of_time[$i + 1];
}

$indexes_to_be_skipped = array();
// Here I am getting the indexes of the time slot which has appointment
$indexes_to_be_skipped = array();
foreach($appointments as $appointment) {
  for($i=0; $i < count($new_array_of_time); $i++) {
    if($new_array_of_time[$i] == ($appointment['time'])) {
      $indexes_to_be_skipped[$i] = $i;
    }
  }
}
for($i = 0; $i < count($array_of_time) - 1; $i++){
  // check if current time slot has already appointment
  if(isset($indexes_to_be_skipped[$i])) {
    // then remove it
    unset($new_array_of_time[$i]);
  }
}


// resetting index
$narray_of_time = $new_array_of_time;
$new_array_of_time = array();
foreach($narray_of_time as $item) {
  $new_array_of_time[] = $item;
  
}                 
return view ('frontend.takeappointment',compact('app1','app2','new_array_of_time'));
            
                   
                    break;
        
                  case 'Submit':*/

    public function store(Request $request){
                    
            $request->validate([
                'name'=>'required',
                'username'=>'required',
                'email'=>'required|email',
                'date'=>'required|date',
              
               
                
               
             
                
            ]);  
                 
         
    
            $appointment = new Flight;
            $appointment->name = $request->name;
            $appointment->username = $request->username;
            $appointment->email = $request->email;
            $appointment->Sid = $request->Sid;
            $appointment->Sname = $request->Sname;
            $appointment->date = $request->date;
            $appointment->time = $request->time;

            
           
            $store = $appointment->save();
    
            if($store){
                return 'Thank you for your appointment. Please wait for approval';
    
            }else{
                return 'Something went wrong, try again later';
    
            }
        
        }
       

         /*public function insert(){
    
            return view('frontend.takeappointment');
        }
        public function create(Request $request){
            $rules = [
                'name' => 'required|string|min:3|max:255',
                'username' => 'required|string|min:3|max:255',
                'email' => 'required|string|email|max:255'
            ];
            $validator = Validator::make($request->all(),$rules);
            if ($validator->fails()) {
                return redirect('insert')
                ->withInput()
                ->withErrors($validator);
            }
            else{
                $data = $request->input();
                try{
                    $student = new Appointments;
                    $student->first_name = $data['name'];
                    $student->last_name = $data['username'];
				
				$student->email = $data['email'];
				$student->save();
				return redirect('insert')->with('status',"Insert successfully");
			}
			catch(Exception $e){
				return redirect('insert')->with('failed',"operation failed");
			}
		}
    }*/
      
                 
        
          
      



       

      
   

    public function showtherapist($id){
        $userid = User::where('id','=', $id)->first();
        $data = DB::select('select * from therapists');
        return view('frontend.therapist',['data'=>$data],['userid'=>$userid]);
        }

      
      
    
        public function approve($id)
        {
           $app = Appointments::findorFail($id);

          
        // Make sure you've got the Page model
         
          $app->status = 'approved';
          $app->save();
          
          
          
          if($app){
            return back()->with('success','Status Updated');

        }else{
            return back()->with('fail','Something went wrong, try again later');

        }

        }

        
        public function reject($id)
        {
           $app = Appointments::findorFail($id);

          
        // Make sure you've got the Page model
         
          $app->status = 'rejected';
          $app->save();
          
          
          
          if($app){
            return back()->with('success','Status Updated');

        }else{
            return back()->with('fail','Something went wrong, try again later');

        }

        }


        public function edit($id)
    {
         

        $user = User::findorFail($id);
        return view('frontend.profile', ['user'=>$user]);
            
    
    }

    
    public function update(Request $request, $id)
    {
        

        $up = User::findorFail($id);
        $up->firstname = $request->firstname;
        $up->lastname = $request->lastname;
        $up->email = $request->email;
        $up->username = $request->username;
        if(($request->password)!=''){
        $up->password = Hash::make($request->password);
        }
        $update = $up->update();
        
        if($update){
        return back()->with('success','Data Updated');


        }else{
        return back()->with('success','New User has been successfully added to the database');

        }

        
          
          
          
    
    }

    
    public function userapp($id){
        $app = DB::select("select * from appointments where username = '$id'");
    
       
        return view('frontend.appointments',['app'=>$app]);
        }
    
        public function quiz(Request $request)
        {
            $results=[];
            return view('frontend.assessment',compact('results'));
        }

    public function process(Request $request)
        {
            $request->validate([
                'q1'=>'required',
                'q2'=>'required',
                'q3'=>'required',
                'q4'=>'required',
                'q5'=>'required',

              
                
            ]);
    
            $q1 = $request->input('q1');
            $q2 = $request->input('q2');
            $q3 = $request->input('q3');
            $q4 = $request->input('q4');
            $q5 = $request->input('q5');
    
    
            $score = $q1 + $q2 +$q3 + $q4 + $q5;
           
            $result= array(5);
           

            for($i = 0; $i < 5; $i++)
            {    
 
            if($score<=5){
              
                $result[$i]='You are doing very well on your own';
                $i=$score;
                
            }
           

            else{
            
             
                          
              
                $result[$i]='Not Okay ';
                $i++;


                if($q1>=2){
               
               
                $result[$i]='Take care of your sleep ';
                $i++;
                }

               
                $i++;
               

                if($q2>=2){
               
                   if( $q1>=2){
                    
                     $result[$i]='and eating ';
                     $i++;
                    }
                   
                   else{ 
                      
                       $result[$i]='take care of your eating ';
                       $i++;
                   }  
                    
                }
                $i++;
            
                if($q3>=2){
               
                    if( $q1>=2 || $q2>=2){

                        $result[$i]='and focus ';
                        $i++;
                    }
                    else{
              
                        $result[$i]='take care of your focus ';
                        $i++;
                    }
                 }
             
                 $i++;
         
                if($q4>=2){
               
                    if( $q1>=2 || $q2>=2 || $q3>=2){

                        $result[$i]='and worry ';
                        $i++;
                    }
                    else{
                        $result[$i]='take care of your worry ';
                        $i++;
                    }
                 }
                 $i++;
                } 
               
               
            }
            $results = array();
            foreach($result as $item) {
              $results[] = $item;
            
            }  
                           
            

            return view ('frontend.assessment',compact('results'));
    
        

        }

        
        public function matching()
        {
            return view ('frontend.matching');
        }

        public function suggestion()
        {
            return view('frontend.suggestion');
        }
    

        public function match(Request $request)
        {
            $request->validate([
                'q1'=>'required',
                'q2'=>'required',
                'q3'=>'required',
                'q4'=>'required',
                'q5'=>'required',
                
              
                
            ]);
    
            $q1 = $request->input('q1');
            $q2 = $request->input('q2');
            $q3 = $request->input('q3');
            $q4 = $request->input('q4');
            $q5 = $request->input('q5');

            $fields = DB::select('select field from therapists');
         
        foreach ($fields as $field)   {
       
            foreach (json_decode($field->field,true) as $field1){
            
            
              if ($field1=="Depression" || $field1=="Trauma"){
              
             // echo "Hi";
                }
              else{
                //   echo "Bye";
              }
              
            }

           
        }
             $datas =  DB::select('select * from therapists');
            
             $result=array();
             $i =0;
             foreach ($datas as $data) {
                 
             if($data->gender==$q1){
                // echo "Yes1";
                 if($data->sformat==$q3){
                      // echo "Yes2";
                      foreach (json_decode($data->stype,true) as $stype1) {
       
                       if ($stype1==$q4){
                          
                          // $result[$i]=$data;
                          // echo "Yes3";
                          // $i++;
                        
                            foreach (json_decode($data->age,true) as $age1) {
             
                             if ($age1==$q5){
                                
                                // $result[$i]=$data;
                                // echo "Yes4";
                                // $i++;
                           
                      

                     
                               foreach (json_decode($data->field,true) as $field1) {

                                foreach ($q2 as $q2_1) {
                                    if ($field1==$q2_1){
                             
                                            // echo "Yes5";
                                            $result[$i]=$data;
                                             // print_r($result);
                           
                                            $i++;
                                             break;
                          
                            }
                            
                            else{
                     
                            // echo "Nothing1";
                           
                            }
                         
                        
                     }
            
                   
                     
                    }
                }
                else{
                    
                    // echo "Nothing2";
                     
                 }
                            }
                   
                    
                }
              
                     else{
                    
                       // echo "Nothing3";
                        
                    }
                   
                    
                   
                    }
                 }
                else{
                    
                   // echo "Nothing4";
                    
                   }
                  
              }
            else{
                
                //echo "Nothing5";
            }
        }

      // print_r($result);
        $results=array();
         $k=1;
            for ($i=0;$i<count($result);$i++){
                if($i<1){
                $results[]=$result[$i] ;
               // print_r($results);
               
                }
                else if($i>=1 && $i<=count($result)){
                   for ($j=$k;$j<=$i;$j++){
                     if($result[$j]->id==$result[$i-1]->id){
                      //  echo "Nothing";
                        $k++;
                      break;
                     
                
                 }else{
                 $results[]=$result[$i] ;
                // echo "Yes";
                   $k++;
                   break;
                 
                // print_r($results);
                
                 }
                 
                }
                
              
                     
                }
              
               
            else{
               // echo "No";
                break;
               
            }
           
               
           
        
        }

      
      
        return view ('frontend.suggestion',compact('results'));
     
    }
         
            
               // $data1 = Therapist::where('gender','=', $q1)
               // ->where('field','=', $q2)->where('sformat','=', $q3)->get();

         
             }
             
        

        
     
  
    

