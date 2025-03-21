<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Subscriber;
class subscribersController extends Controller
{
    public function index(Request $request){
        $data = Subscriber::all()->where('isSubscribe', 1);
        if($request->session()->get('fullname')){
            return view('admin.subscribers',['subscribers'=>$data,'fullname'=>$request->session()->get('fullname')]);
        }else{
            return redirect('login');
        }
    }
    
    public function unsubscribe($email){
        Subscriber::where('email', $email)->update(['isSubscribe' => 0,]);
        return redirect('/');
    }
}
