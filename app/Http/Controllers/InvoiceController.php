<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(Request $request)
    {
        $greetings = $request->input('greetings',"Hello");
        $city = $request->input('city',"BD");
        $age = $request->input('age',"23");
        return response("invoice page request update {$greetings} from {$city} and {$age} years old");
    }

    public function demo(Request $request)
    {
        $fname = $request->input("fname","Liakot");
        $lname = $request->input("lname","Hossain");
        $age = $request->input("age",20);
        return response("invoice page request {$fname} {$lname} and {$age} years old");
    }

    public function invoice(Request $request,$invoiceId)
    {
        if($request->has("download")){
            $type = $request->input('download');
            $name = $request->input('name');
            $color = $request->input('color');
            if($color=="red"){
                return response("Downloading {$type} Invoice with ID: {$invoiceId} Name: {$name} and Color: {$color}");
            }
            elseif($color=="blue"){
                return response("Downloading {$type} Invoice with ID: {$invoiceId} Name: {$name} and Color: {$color}");
            }
            elseif($type=="png"){
                return response("Downloading {$type} Invoice ");
            }
        }

        if($request->has("email")){
            $email = $request->input('email');
            if($email == 1){
                return response("Displaying  Invoice with ID: {$invoiceId} Email: {$email}");
            }
        }
        return response("Displaying text Invoice with ID: {$invoiceId}");
    }

}


