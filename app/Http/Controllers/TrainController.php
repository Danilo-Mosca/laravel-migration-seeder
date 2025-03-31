<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        // $trains = Train::all();
        // dd($trains);

        // Restituisco tutti i treni che sono in partenza dalla data odierna in avanti, in ordine cronologico:
        $trains = Train::orderBy('data_partenza', "ASC")->where('data_partenza', '>=', date("Y-m-d"))->get();
        // dd($trains);
        return view("index", compact('trains'));
    }
}
