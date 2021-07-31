<?php

namespace App\Http\Controllers\Api;
use App\Models\Suplier;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supliers = Suplier::all();

        return response()->json([
            'success'=> true,
            'message'=> 'Daftar data suplier',
            'data'=> $supliers
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
            'nama_suplier' => 'required',
            'no_tlp' => 'required |numeric',
            'alamat' => 'required'
          
        ]);

        $supliers = Suplier::create([
            'nama_suplier' => $request->nama_suplier,
            'no_tlp' => $request->no_tlp,
            'alamat' => $request->alamat
            

           
        ]);
        if($supliers)
        {
            return response()->json([
                'success' => true,
                'message' => 'Suplier berhasil di tambahkan',
                'data' => $supliers
            ],200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Suplier gagal di tambahkan',
                'data' => $supliers
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
        $suplier = Suplier::where('id',$id)->first();
        
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Suplier',
            'data'    => $suplier
        ], 200);

    }
    public function edit($id)
    {
        $suplier = Suplier::where('id',$id)->first();
        
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Suplier',
            'data'    => $suplier
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
        $suplier = Suplier::find($id)
        ->update([
            'nama_suplier' => $request->nama_suplier,
            'no_tlp' => $request->no_tlp,
            'alamat' => $request->alamat
           
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data suplier berhasil di rubah',
            'data'    => $suplier
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
        $suplier = Suplier::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data suplier berhasil di hapus',
            'data'    => $suplier
        ], 200);
    }
}
