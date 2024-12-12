<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    protected $tasks = [
        [
            "id" => 1,
            "name" => "Liakot",
            "age" => 20
        ],
        [
            "id" => 2,
            "name" => "hasan",
            "age" => 25
        ],
        [
            "id" => 3,
            "name" => "labib",
            "age" => 20
        ],
        [
            "id" => 4,
            "name" => "sakib",
            "age" => 20
        ],
        [
            "id" => 5,
            "name" => "rakib",
            "age" => 20
        ]
    ];

    protected $information=[
        [
            "id" => 1,
            "name" => "Liakot",
            "nationality" => "Bangladeshi",
            "age" => 20,
            "gender" => "Male",
            "city" => "Dhaka"
        ],
        [
            "id" => 2,
            "name" => "hasan",
            "nationality" => "Bangladeshi",
            "age" => 25,
            "gender" => "Male",
            "city" => "Dhaka"
        ],
        [
            "id" => 3,
            "name" => "labib",
            "nationality" => "Bangladeshi",
            "age" => 20,
            "gender" => "Male",
            "city" => "Dhaka"
        ],
        [
            "id" => 4,
            "name" => "sakib",
            "nationality" => "Bangladeshi",
            "age" => 20,
            "gender" => "Male",
            "city" => "Dhaka"
        ]   
    ];

    public function index()
    {
        return response($this->tasks);
    }

    public function show($taskid)
    {
        if($taskid<0 || $taskid>=count($this->tasks)){
            return response("Task not found");
        }
        $taskshow=$this->tasks[$taskid-1];

        return response($taskshow);
    }

    public function showing($taskid)
    {
        if($taskid<0 || $taskid>=count($this->information)){
            $result = [
                'error' => 'Task not found',
                'code' => 404,
                'sucess' => ' found success'

            ];
            return response()->json($result['error']." ".$result["code"]);     
           }
        $informationshowid=$this->information[$taskid-1];
        return response($informationshowid);
    }
}
