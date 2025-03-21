<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;
use App\Models\Subscriber;
Use \Carbon\Carbon;

class homeController extends Controller
{
    public function index(){
        $date = Carbon::now();
        $todayDate = date("Y-m-d");
        $data = Promotion::where('dateFin' ,'>=', $todayDate)->get();
        if(count($data) > 0){
            return view('home',['promotions'=>$data,'available'=>1]);
        }else{
            return view('home',['promotions'=>$data,'available'=>0]);
        }
    }
    public function subscribe(Request $request){
        if($request->has('subscribe')){
            $date = Carbon::now();
            $subscriber = new Subscriber([
                "email"=>$request->input('email'),
                "date"=>$date->format('Y-m-d'),
            ]);
            $subscriber->save();
        
            // Send the welcome email without a template
            $mail_data = [
                'recipient' => $request->input('email'),
                'fromEmail' => 'info@hmtours.ca',
                'fromName' => 'HMTours',
                'subject'  => "Bienvenue dans notre communauté",
                'body'      => "Nous sommes ravis de vous accueillir parmi nous ! Merci de vous être inscrit à notre communauté.",
            ];
        
            \Mail::send([], [], function($message) use ($mail_data) {
                $message->to($mail_data['recipient'])
                        ->from($mail_data['fromEmail'], $mail_data['fromName'])
                        ->subject($mail_data['subject'])
                        ->setBody($mail_data['body'], 'text/html'); // You can use 'text/plain' if you want plain text instead of HTML
            });
        
            return back()->with('abonnerSuccess','vous êtes maintenant un abonné !!!');

        }elseif($request->has('sendMessage')){
            $mail_data = [
                'recipient'=>'info@hmtours.ca',
                'fromEmail'=>$request->email,
                'fromName'=>$request->name,
                'subject'=>$request->email." (".$request->name.") ",
                'body'=>$request->message,
            ];
            \Mail::send('email-template2',$mail_data,function($message) use ($mail_data){
                $message->to($mail_data['recipient'])
                        ->from($mail_data['fromEmail'],$mail_data['fromName'])
                        ->subject($mail_data['subject']);
            });
            return back()->with('sendSuccess','votre message est envoyer avec succés');

        }
        // $data = Promotion::all();
        //     return view('home',['promotions'=>$data]);
        
    }
    public function contact(Request $request){
        
    }
}
