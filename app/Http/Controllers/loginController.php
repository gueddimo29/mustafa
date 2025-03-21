<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Subscriber;

class loginController extends Controller
{
    public function index(Request $request){
        if($request->session()->get('fullname')){
            return redirect('admin/subscribers');
        }else{
            return view('login');
        }
    }

    public function connect(Request $request){
        $admin = Admin::where('email' ,'=', $request->email)->first();
        if($admin){
            if($admin->password == md5($request->password)){
                $data = Subscriber::all();
                $request->session()->put('fullname',$admin->fullname);
                $request->session()->put('id',$admin->id);
                return redirect('admin/subscribers');
            }else{
                return back()->with('fail','password incorecte');
            }
        }else{
            return back()->with('fail','incorecte email');
        }

    }
    public function logout(Request $request){
        $request->session()->forget('id');
        $request->session()->forget('fullname');
        return redirect('login');
    }
}
