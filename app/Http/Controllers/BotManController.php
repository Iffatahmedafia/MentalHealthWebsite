<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;



class BotManController extends Controller

{
    

    public function tinker()
    {
        return view('frontend.botman');
    }

    
   public function handle()
    {
        $botman = app('botman');


    $botman->hears('Hi', function ($bot) {
     $bot->reply('Hello!');
     $bot->typesAndWaits(2);
     $question = Question::create('Are you feeling down?')
    
    ->addButtons([
        Button::create('Yes')->value('yes'),
        Button::create('No')->value('no'),
    ]);
    $bot->reply($question);
});

    $botman->hears('How are you', function ($bot) {
    $bot->reply('I am fine.Thank you!');
});
    
$botman->hears('Help', function ($bot) {
	$bot->typesAndWaits(1);
    $message = Question::create('Do you want to?')
    ->addButton(Button::create('Talk to someone')->value('foo'));

    $bot->reply($message);
});

$botman->hears('Tell', function ($bot) {
$question = Question::create('Do you agree with me?')
    
    ->addButtons([
        Button::create('Yes')->value('yes'),
        Button::create('No')->value('no'),
    ]);
    $bot->reply($question);
});


   
    

$botman->listen();

        
        
 }

 
   
 


}
