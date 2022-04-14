<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class DashboardHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.home.index',[
            'post' => Home::all()
    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
        return view('dashboard.home.show',[
            'post' => Home::find($home)
    
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
        return view('dashboard.home.edit',[
            'post' => $home
    
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        //
        $validatedData = $request->validate([
            'gambar' => 'image|file|max:2096',
            'nama' => 'required',
            'deskripsi'=> 'required'            
        ]);      

        if($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('profile-images');
        }  

        Home::where('id',$home->id)
        ->update($validatedData);

        return redirect('/dashboard/home')->with('success','Home Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
