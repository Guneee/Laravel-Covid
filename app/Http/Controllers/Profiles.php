<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Profiles extends Controller
{
    //
    function list()
    {
        $data = Http::get('https://api.covid19api.com/dayone/country/mongolia')->json();
 
        return view('profiles',['data'=>$data]);

    }



}
