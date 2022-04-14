<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicesKupon;

class ServicesKuponController extends Controller
{
    //
    public function index(){        
        $data = ServicesKupon::all();      
        return view('services/kupon',['data' => $data]);
    }
}
