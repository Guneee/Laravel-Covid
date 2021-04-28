<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Profiles extends Controller
{
    //
    function list()
    {

        $obj = Http::get('https://api.covid19api.com/doyonne/country/india')->json();

        return view('profiles',['obj'=>$obj]);
    }



}
