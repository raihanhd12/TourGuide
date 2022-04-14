<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return Profile::where('title', auth()->user()->id)->get();           
        return view('dashboard.profile.index',[
            'post' => Profile::all()
    
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
        return view('dashboard.profile.create');
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
        
        $validatedData = $request->validate([
            'gambar' => 'image|file|max:2096',
            'nama' => 'required|unique:profiles',
            'lokasi'=> 'required',
            'deskripsi'=>'required'
        ]); 
        
        if($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('profile-images');
        }
        
        $validatedData['excerpt'] = Str::limit($request->deskripsi, $allowed_tags=null, 300);

        Profile::create($validatedData);

        return redirect('/dashboard/profile')->with('success','Gallery Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
        return view('dashboard.profile.show',[
            'post' => Profile::find($profile)
    
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
        return view('dashboard.profile.edit',[
            'post'=>$profile
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
        $validatedData = $request->validate([
            'gambar' => 'image|file|max:2096',
            'nama' => 'required',
            'lokasi'=> 'required',
            'deskripsi'=>'required'
        ]);  
        
        if($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('profile-images');
        }    

        Profile::where('id',$profile->id)
        ->update($validatedData);

        return redirect('/dashboard/profile')->with('success','Gallery Berhasil Di Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
        Profile::destroy($profile->id);

        return redirect('/dashboard/profile')->with('success','Gallery Berhasil Dihapus!');
    }
}
