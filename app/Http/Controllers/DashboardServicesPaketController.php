<?php

namespace App\Http\Controllers;

use App\Models\ServicesPaket;
use Illuminate\Http\Request;


class DashboardServicesPaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.servicesPaket.index',[
            'post' => ServicesPaket::all()
    
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
        return view('dashboard.servicesPaket.create');
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
            'paket_gambar' => 'image|file|max:2096',
            'judulkartu' => 'required|unique:services_pakets',
            'harga'=> 'required',
            'tempat'=>'required'
        ]);

        if($request->file('paket_gambar')){
            $validatedData['paket_gambar'] = $request->file('paket_gambar')->store('profile-images');
        }

        ServicesPaket::create($validatedData);

        return redirect('/dashboard/servicesPaket')->with('success','Paket Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ServicesPaket $servicesPaket)
    {
        //
        return view('dashboard.servicesPaket.show',[
            'post' => ServicesPaket::find($servicesPaket)
    
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ServicesPaket $servicesPaket)
    {
        //
        return view('dashboard.servicesPaket.edit',[
            'post'=>$servicesPaket
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServicesPaket $servicesPaket)
    {
        //
        $validatedData = $request->validate([
            'paket_gambar' => 'image|file|max:2096',
            'judulkartu' => 'required',
            'harga'=> 'required',
            'tempat'=>'required'
        ]);   
        
        if($request->file('paket_gambar')){
            $validatedData['paket_gambar'] = $request->file('paket_gambar')->store('profile-images');
        }  

        ServicesPaket::where('id',$servicesPaket->id)
        ->update($validatedData);

        return redirect('/dashboard/servicesPaket')->with('success','Paket Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServicesPaket $servicesPaket)
    {
        //
        ServicesPaket::destroy($servicesPaket->id);

        return redirect('/dashboard/servicesPaket')->with('success','Paket Berhasil Dihapus!');
    }
}
