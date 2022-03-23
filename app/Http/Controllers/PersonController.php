<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function __invoke()
    {
        $persons = [

                 ['id'=> 1,
                    'name'=> "Vasya",
                    'age'=> 29,
                    'job'=> "electrical",
                ],
                [
                    'id'=> 2,
                    'name'=> "Vadym",
                    'age'=> 30,
                    'job'=> "developer",
                ],
                [
                    'id'=> 3,
                    'name'=> "Igor",
                    'age'=> 31,
                    'job'=> "manager",
                ],
                [
                    'id'=> 4,
                    'name'=> "Olya",
                    'age'=> 32,
                    'job'=> "travel",
                ],

        ];
        return $persons;
    }
}
