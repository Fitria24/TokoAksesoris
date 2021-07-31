<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $produks =  Produk::all();
        return response()->json([
            'success'=> true,
            'message'=> 'Daftar data produk',
            'data'=> $produks
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required |numeric',
            'stok' => 'required |numeric',
            'kategori' => 'required',
            'produk' => 'required'
        ]);

        $produks = Produk::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'kategori' => $request->kategori,
            'produk' => $request->produk
           
        ]);
        if($produks)
        {
            return response()->json([
                'success' => true,
                'message' => 'Produk berhasil di tambahkan',
                'data' => $produks
            ],200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Produk gagal di tambahkan',
                'data' => $produks
            ],409);
    }
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $produk = Produk::where('id',$id)->first();
        
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Produk',
            'data'    => $produk
        ], 200);

    }
    public function edit($id)
    {
      
        $produk = Produk::where('id',$id)->first();
        
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Produk',
            'data'    => $produk
        ], 200);
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
        $produk = Produk::find($id)
        ->update([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'kategori' => $request->kategori,
            'produk' => $request->produk
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data produk berhasil di rubah',
            'data'    => $produk
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data produk berhasil di hapus',
            'data'    => $produk
        ], 200);

    }

}
