<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index(){        
        $data = User::all();      
        return view('register/register',['data' => $data]);
    }

    public function store(Request $request){   
        $validateData = $request -> validate([
            'title' => '',
            'firstName' => 'required|min:3',
            'lastName' => 'required|min:3',
            'alamat' => 'required|min:7',
            'notelp' => 'required|min:9',
            'email' => 'required|min:7',
            'username' => 'required|min:5',
            'password' => 'required|min:8',
        ]);
        
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
        // $request->session()->flash('success', 'data tersimpan');
        return redirect('/login/login')->with('success', 'data tersimpan');
        // dd('registrasi berhasil'); 
        // return $request->all();
    }
}
