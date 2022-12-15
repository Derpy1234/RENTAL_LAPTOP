<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('create');
    }

    public function data()
    {
        $laptops = Data::all();
        return view('data', compact('laptops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
            'name' => 'required',
            'nis' => 'required',
            'purpose' => 'required',
            'keterangan' => 'required',
            'tanggal' => 'required',
            'rayon' => 'required',
            'teacher_name' => 'required',
        ]);

        

        Data::create([
            'name' => $request->name,
            'nis' => $request->nis,
            'purpose' => $request->purpose,
            'keterangan' => $request->keterangan,
            'tanggal' => $request->tanggal,
            'rayon' => $request->rayon,
            'teacher_name' => $request->teacher_name,
            'return_date' => $request->return_date,
        ]);


        // kalau berhasil tambah ke db, bakal diarahin ke halaman dashboard dengan menampilkan pemberitahuan 
        return redirect('/data')->with('addData', 'Berhasil menambahkan data Main!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function show(Data $data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function edit(Data $data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
       Data::where('id',  '=', $id)->update([
            'return_date' => now(),
       ]);
       
        return redirect('/data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Data::where('id', $id)->delete();
        return redirect()->back();
    }
}
