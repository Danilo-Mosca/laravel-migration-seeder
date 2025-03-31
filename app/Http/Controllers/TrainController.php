<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        // $trains =...;
        return view("index");
    }
}
