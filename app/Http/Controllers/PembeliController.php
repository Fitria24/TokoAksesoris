<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembeli;
class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataPembeli = Pembeli::latest()->get();
          return view('Uploadfilepembeli.Data-pembeli',compact('dataPembeli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Uploadfilepembeli.Create-pembeli');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dtUpload = new Pembeli;
        
        $dtUpload->nama_pembeli = $request->nama_pembeli; 
        $dtUpload->no_tlp = $request->no_tlp;
        $dtUpload->alamat = $request->alamat;
        $dtUpload->produk_dibeli = $request->produk_dibeli;
        $dtUpload->jumlah_dibeli= $request->jumlah_dibeli;
       
        $dtUpload->save();
        return redirect('data-pembeli');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dt = Pembeli::findorfail($id);
        return view('Uploadfilepembeli.Edit-pembeli',compact('dt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ubah = Pembeli::findorfail($id);
       

        $dt = [
                'nama_pembeli' => $request['nama_pembeli'],
                'no_tlp' => $request['no_tlp'],
                'alamat' => $request['alamat'],
                'produk_dibeli' => $request['produk_dibeli'],
                'jumlah_dibeli' => $request['jumlah_dibeli'],
                
        ];
        
        $ubah->update($dt);
        return redirect('data-pembeli');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         //dd($id);
         $hapus = Pembeli::findorfail($id);

     
         $hapus->delete();
         return back();
    }
}
