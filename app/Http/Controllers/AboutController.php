<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller

{
    protected $information=[
        [
            "id"=>1,
            "name"=>"Liakot",
            "age"=>20,
            "city"=>"Dhaka"
        ],
        [
            "id"=>2,
            "name"=>"Rakib",
            "age"=>21,
            "city"=>"Cumilla"
        ],
        [
            "id"=>3,
            "name"=>"Sohag",
            "age"=>22,
            "city"=>"Jessore"
        ],
        [
            "id"=>4,
            "name"=>"Sopnil",
            "age"=>23,
            "city"=>"Khulna"
        ],
        [
            "id"=>5,
            "name"=>"Sajjad",
            "age"=>24,
            "city"=>"Rajshahi"
        ]
    ];
    public function index()
    {
        return response($this->information);
    }

    public function aboutInfo($infoid)
    {
        if($infoid<0 || $infoid>count($this->information)){
            $result=[
                "status"=>"error",
                "message"=>"Not found"
            ];
            return response($result);
        }
        $info_collect=$this->information[$infoid-1];
        return response($info_collect);
    }
}
