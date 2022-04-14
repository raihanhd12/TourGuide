<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    //
    public function index(){        
        $data = Profile::all();      
        return view('profile/profile',['data' => $data]);
    }
}
