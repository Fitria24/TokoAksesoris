<?php

namespace App\Http\Controllers\Api;
use App\Models\Pembeli;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembelis = Pembeli::all();

        return response()->json([
            'success'=> true,
            'message'=> 'Daftar data pembeli',
            'data'=> $pembelis
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
            'nama_pembeli' => 'required',
            'no_tlp' => 'required |numeric',
            'alamat' => 'required',
            'produk_dibeli' => 'required',
            'jumlah_dibeli' => 'required |numeric'
        ]);

        $pembelis = Pembeli::create([
            'nama_pembeli' => $request->nama_pembeli,
            'no_tlp' => $request->no_tlp,
            'alamat' => $request->alamat,
            'produk_dibeli' => $request->produk_dibeli,
            'jumlah_dibeli' => $request->jumlah_dibeli

           
        ]);
        if($pembelis)
        {
            return response()->json([
                'success' => true,
                'message' => 'Pembeli berhasil di tambahkan',
                'data' => $pembelis
            ],200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Pembeli gagal di tambahkan',
                'data' => $pembelis
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
        $pembeli = Pembeli:: where('id',$id)->first();
        
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Pembeli',
            'data'    => $pembeli
        ], 200);

    }
    public function edit($id)
    {
        $pembeli = Pembeli::where('id',$id)->first();
        
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Pembeli',
            'data'    => $pembeli
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
        $pembeli = Pembeli::find($id)
        ->update([
            'nama_pembeli' => $request->nama_pembeli,
            'no_tlp' => $request->no_tlp,
            'alamat' => $request->alamat,
            'produk_dibeli' => $request->produk_dibeli,
            'jumlah_dibeli' => $request->jumlah_dibeli
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data pembeli berhasil di rubah',
            'data'    => $pembeli
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
        $pembeli = Pembeli::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data pembeli berhasil di hapus',
            'data'    => $pembeli
        ], 200);
    }
}
