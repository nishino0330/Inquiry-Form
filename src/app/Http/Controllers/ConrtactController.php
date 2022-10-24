<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ConrtactRequest;
use App\Mail\ContactThanks;

class ConrtactController extends Controller
{
    public function index(){
        return view('input');
    }
    public function check(ConrtactRequest $request){
        $inputs = $request->all();
        return view('check', $inputs);
    }
    public function complete(ConrtactRequest $request){
        $inputs = $request->all();
        \Mail::send(new ContactThanks($inputs['mail_address']));
        return view('complete', $inputs);
    }
    
}
