<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    //
    public function index(){        
        $data = Home::all();      
        return view('home',['data' => $data]);
    }

}
