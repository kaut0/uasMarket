<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Market;


class MarketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Market::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $market = new Market;
        $market ->nama_produk = $request->nama_produk;
        $market ->desc_produk = $request->desc_produk;
        $market ->jenis_produk = $request->jenis_produk;
        $market ->brand = $request->brand;
        $market ->harga = $request->harga;
        $market->save();

        return 'Berhasil Di simpan';
        
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
        //
        
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
        //
        $nama_produk = $request->input('nama_produk');
        $desc_produk = $request->input('desc_produk');
        $jenis_produk = $request->input('jenis_produk');
        $brand = $request->input('brand');
        $harga = $request->input('harga');

        $data = Market::where('id',$id)->first();
        $data->nama_produk = $nama_produk;
        $data->desc_produk = $desc_produk;
        $data->jenis_produk = $jenis_produk;
        $data->brand = $brand;
        $data->harga = $harga;

        if($data->save()){
            $res['message'] = "Success!";
            $res['value'] = "$data";
            return response($res);
        }
        else{
            $res['message'] = "Failed!";
            return response($res);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $market = Market::findOrFail($id);
        $market->delete();

        return 'berhasil di hapus';
    }
}
