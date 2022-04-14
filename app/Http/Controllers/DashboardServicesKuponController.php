<?php

namespace App\Http\Controllers;

use App\Models\ServicesKupon;
use Illuminate\Http\Request;


class DashboardServicesKuponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.servicesKupon.index',[
            'post' => ServicesKupon::all()
    
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
        return view('dashboard.servicesKupon.create');
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
            'nilai' => 'required|unique:services_kupons',
            'tanggalmulai' => 'required',
            'tanggalberakhir'=> 'required',
            'kode'=>'required'
        ]);  

        ServicesKupon::create($validatedData);

        return redirect('/dashboard/servicesKupon')->with('success','Kupon Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ServicesKupon $servicesKupon)
    {
        //
        return view('dashboard.servicesKupon.show',[
            'post' => ServicesKupon::find($servicesKupon)
    
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ServicesKupon $servicesKupon)
    {
        //
        return view('dashboard.servicesKupon.edit',[
            'post'=>$servicesKupon
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServicesKupon $servicesKupon)
    {
        //
        $validatedData = $request->validate([
            'nilai' => 'required',
            'tanggalmulai' => 'required',
            'tanggalberakhir'=> 'required',
            'kode'=>'required'
        ]);  

        ServicesKupon::where('id',$servicesKupon->id)
        ->update($validatedData);

        return redirect('/dashboard/servicesKupon')->with('success','Kupon Berhasil Di Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServicesKupon $servicesKupon)
    {
        //
        ServicesKupon::destroy($servicesKupon->id);

        return redirect('/dashboard/servicesKupon')->with('success','Kupon Berhasil Dihapus!');
    }
}
