<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suplier;
class SuplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataSuplier = Suplier::latest()->get();
          return view('Uploadfilesuplier.Data-suplier',compact('dataSuplier'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Uploadfilesuplier.Create-suplier');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dtUpload = new Suplier;
        
        $dtUpload->nama_suplier = $request->nama_suplier; 
        $dtUpload->no_tlp = $request->no_tlp;
        $dtUpload->alamat = $request->alamat;
      
       
        $dtUpload->save();
        return redirect('data-suplier');
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
        $dt = Suplier::findorfail($id);
        return view('Uploadfilesuplier.Edit-suplier',compact('dt'));
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
        $ubah = Suplier::findorfail($id);
       

        $dt = [
                'nama_suplier' => $request['nama_suplier'],
                'no_tlp' => $request['no_tlp'],
                'alamat' => $request['alamat'],
                
                
        ];
        
        $ubah->update($dt);
        return redirect('data-suplier');
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
        $hapus = Suplier::findorfail($id);

     
        $hapus->delete();
        return back();
    }
}
