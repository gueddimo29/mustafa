<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Subscriber;

class messagesController extends Controller
{
    public function index(Request $request){
        if($request->session()->get('fullname')){
            return view('admin.messages',['fullname'=>$request->session()->get('fullname')]);
        }else{
            return redirect('login');
        }
    }
    
    public function send(Request $request){
        $datas = Subscriber::all();
        $email = $datas->pluck('email')->toArray();
        $emails = array_unique($email);
        $todayDate = date("Y-m-d");
        
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $title = $validatedData['title'];
        // $content = $validatedData['message'];
        $content = '<h1>ZCZCzczC</h1><ol><li>asfasf</li><li>asfasf</li></ol><ul><li>asfasfasf</li></ul></div><div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>';
        
        $mail_data = [
            // 'recipient'=>$emails,
            'recipient'=>['mahdigueddim@gmail.com', 'mahdios20182@gmail.com'],
            'fromEmail'=>"infos@hmtours.ca",
            'fromName'=>"HMTours",
            'subject'=>$title ,
            'body'=>$content,
        ];
        
        // \Mail::send($mail_data,function($message) use ($mail_data){
        //     $message->to($mail_data['recipient'])
        //             ->from($mail_data['fromEmail'],$mail_data['fromName'])
        //             ->subject($mail_data['subject'], 'text/html');
        // });
                
            
        \Mail::send([], [], function ($message) use ($validatedData,$mail_data) {
        $message->to($mail_data['recipient'])
            ->from($mail_data['fromEmail'],$mail_data['fromName'])
            ->subject($validatedData['title'])
            ->setBody($validatedData['message'], 'text/html'); // Send as HTML
    });

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Message sent successfully!');    
            
    }
}
