<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function index(){        
        $data = Contact::all();      
        return view('/contact',['data' => $data]);
    }

    public function store(Request $request){
        $validateData = $request -> validate([
            'title' => '',
            'namaLengkap' => 'required|min:3',
            'email' => 'required|min:3',
            'pesan' => 'required|min:7'
        ]);
        Contact::create($validateData);
        return redirect('/contact')->with('success', 'Pesan telah terkirim!!');
        
    }
}
