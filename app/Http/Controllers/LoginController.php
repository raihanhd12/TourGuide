<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){        
        $data = User::all();      
        return view('login/login',['data' => $data]);
    }

    public function authenticate(Request $request){  
            $credentials=$request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // untuk menghindari hacking
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->with('loginError','Login failed!');

        dd('berhasil login!');

    }
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    // Admin

    public function indexAdmin(){        
        $data = User::all();      
        return view('login/admin',['data' => $data]);
    }
    public function authenticateAdmin(Request $request){  
        $credentials=$request->validate([
        'username' => 'required',
        'password' => 'required'
    ]);

        // untuk menghindari hacking
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError','Login failed!');

        dd('berhasil login!');

}
    public function logoutAdmin(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login/admin');
    }
}
