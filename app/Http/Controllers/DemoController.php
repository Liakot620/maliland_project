<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function demo1(Request $request)
    {
        $photo = $request->file("photo");
         //$photo->move(public_path("uploads"),$photo->getClientOriginalName());
        $photo->storeAs("uploads",$photo->getClientOriginalName());
        return response("photo uploaded");
    }

    public function demo2(Request $request)
    {
       //return $request->ip();
       //return $request->userAgent();
       //return $request->getAcceptableContentTypes();

    //    if($request->accepts(["composer/json"])){
    //     return 1;
    //    }else{
    //     return 0;
    //    }
    return $request->cookie();

    }

    public function demo3(Request $request)
    {
       $number1 = $request->number1;
       $number2 = $request->number2;
       $sum = $number1 + $number2;
       Log::info("sum of $number1 and $number2 is $sum");   
       Log::error("sum of $number1 and $number2 is $sum");
       Log::warning("sum of $number1 and $number2 is $sum");
       Log::notice("sum of $number1 and $number2 is $sum");
       Log::critical("sum of $number1 and $number2 is $sum");
       Log::alert("sum of $number1 and $number2 is $sum");
       Log::emergency("sum of $number1 and $number2 is $sum");
       return $sum;
    }

    public function sessionput(Request $request)
    {

       $name = $request->name;
       $email = $request->email;
      
       session()->put("name", $name);
       session()->put("email", $email);
        return response("session put");
    }
    public function sessionget(Request $request)
    {
       $data = [
        "name"=> $request->session()->get("name"),
        "email"=> $request->session()->get("email")
       ];
        return response($data,200);

       //return $request->session()->get("name");
    }
    public function sessionforget(Request $request)
    {
        $request->session()->forget("name");
        return "session forget";
    }
    public function sessionpull(Request $request)
    {
        return $request->session()->pull("name");
         
    }
    public function sessionflush (Request $request)
    {
      return  $request->session()->flush();
         
    }
}
