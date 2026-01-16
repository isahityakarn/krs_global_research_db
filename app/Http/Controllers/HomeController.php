<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\SendMail;
use App\Models\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index() 
     {

        $user=User::latest()->first();
        $fullData=compact('user');
        return view('home.index')->with($fullData);
        
    }
    public function login() 
     {

        $user=User::latest()->first();
        $fullData=compact('user');
        return view('home.login')->with($fullData);
        
    }

    public function showResult()
    {
        $title="jjj";
        $data = Survey::orderby('id', 'desc')->first();
        return view("/home/show-result", compact('data','title'));
    }
    public function complete(Request $request)
    {
        $data = Survey::where('uid', $request->uid)->orderby('id','desc')->first();
        return view("/home/show-result", compact('data'));
    }
    public function quotafull(Request $request)
    {
        $data = Survey::where('uid', $request->uid)->orderby('id','desc')->first();
        return view("/home/show-result", compact('data'));
    }
    public function terminate(Request $request)
    {
        $data = Survey::where('uid', $request->uid)->orderby('id','desc')->first();
        return view("/home/show-result", compact('data'));
    }
    public function sendMailStore(Request $request)
    {
        $data=["name"=>$request->name,"email"=>$request->email,"mymessage"=>$request->message];
        Mail::to("info@mindcraftresearch.com")->send(new SendMail($data));
        return redirect('/');
       
    }
    
}
