<?php

namespace App\Models;

class Job{
    public static function all() : array {
        return [
            [
                'id' => 1,
                'tittle' => "Diretor",
                'salary'=> "$50.000"
            ],
            [
                'id' => 2,
                'tittle' => "Programmer",
                'salary'=> "$20.000"
            ],
            [
                'id' => 3,
                'tittle' => "Analyst",
                'salary'=> "$15.000"
            ], 
        ];
    }
}