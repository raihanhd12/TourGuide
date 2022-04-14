<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicesPaket;

class ServicesPaketController extends Controller
{
    //
    public function index(){        
        $data = ServicesPaket::all();      
        return view('services/paket',['data' => $data]);
    }
}