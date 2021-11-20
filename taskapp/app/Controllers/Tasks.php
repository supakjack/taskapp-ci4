<?php

namespace App\Controllers;

class Tasks extends BaseController
{
    public function index()
    {
        $data = [
            ['id' => 1, 'description' => 'first task'],
            ['id' => 2, 'description' => 'second task']
        ];
        
        return view("Tasks/index", ['tasks' => $data]);
    }
}
