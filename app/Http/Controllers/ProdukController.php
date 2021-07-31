<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataProduk = Produk::latest()->get();
          return view('Uploadfileproduk.Data-produk',compact('dataProduk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Uploadfileproduk.Create-produk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nm = $request->produk;
        $namaFile = time().rand(100,999).".".$nm->getClientOriginalExtension();
 
        $dtUpload = new Produk;
        
        $dtUpload->nama_produk = $request->nama_produk; 
        $dtUpload->harga = $request->harga;
        $dtUpload->stok = $request->stok;
        $dtUpload->kategori = $request->kategori;
        $dtUpload->produk = $namaFile;
 
    
        $nm->move(public_path().'/fileproduk',$namaFile);
        $dtUpload->save();
 
        return redirect('data-produk');
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
        $dt = Produk::findorfail($id);
        return view('Uploadfileproduk.Edit-produk',compact('dt'));
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
        $ubah = Produk::findorfail($id);
        $awal = $ubah->produk;

        $dt = [
                'nama_barang' => $request['nama_barang'],
                'harga' => $request['harga'],
                'stok' => $request['stok'],
                'kategori' => $request['kategori'],
                'produk' => $awal,
        ];
        $request->produk->move(public_path().'/fileproduk', $awal);
        $ubah->update($dt);
        return redirect('data-produk');
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
         $hapus = Produk::findorfail($id);

         $file = public_path('/fileproduk/').$hapus->produk;
     
         if (file_exists($file)){
         
             @unlink($file);
         }
     
         $hapus->delete();
         return back();
    }
}
