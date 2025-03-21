<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Subscriber;
use \Carbon\Carbon;

class reservationController extends Controller
{
    public function reserver(Request $request){
        if($request->has('sendMessage')){
            $date = Carbon::now();
            $subscriber = new Subscriber([
                "email"=>$request->email,
                "date"=>$date->format('Y-m-d'),
            ]);
            $subscriber->save();
            $mail_data = [
                'recipient'=>'info@hmtours.ca',
                'fromEmail'=>$request->email,
                'fromName'=>$request->nom." ".$request->prenom,
                'subject'=>"New Reservation from ".$request->nom." ".$request->prenom,
                'body'=>$request,
            ];
            
            \Mail::send('email-template',$mail_data,function($message) use ($mail_data){
                $message->to($mail_data['recipient'])
                        ->from($mail_data['fromEmail'],$mail_data['fromName'])
                        ->subject($mail_data['subject']);
            });
            
            return back()->with('sendSuccess','votre message est envoyer avec succés');
        }
        
    }
}
