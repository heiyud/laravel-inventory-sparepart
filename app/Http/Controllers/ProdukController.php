<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Models\ProdukView;
use App\Models\Produk;
use App\Models\Tipe;
use App\Models\Rak;
use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = \App\Models\Produk::All();
        $rak = \App\Models\Rak::All();
        $tipe = \App\Models\Tipe::All();
        $kategori = \App\Models\Kategori::All();
        return view('produk.produk', ['produk'=>$produk, 'tipe'=>$tipe,'rak'=>$rak, 'kategori'=>$kategori]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img = $request->add_part_img;
        $namaFile = $img->getClientOriginalName();
        $add_produk=new \App\Models\Produk;
        $add_produk->part_code = $request->add_part_code;
        $add_produk->part_name = $request->add_part_name;
        $add_produk->tipe_code = $request->add_tipe_code;
        $add_produk->kategori = $request->add_kategori;
        $add_produk->berat = $request->add_berat;
        $add_produk->warna = $request->add_warna;
        $add_produk->rak_code = $request->add_rak_code;
        $add_produk->part_img = $namaFile;
        $add_produk->harga = $request->add_harga;
        $add_produk->stok = $request->add_stok;
        $img->move(public_path(). '/img' ,$namaFile);
        $add_produk->save();
        Alert::success('Message !', 'New post has been created successfully');
        return redirect('/produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('produk.produk_show', [
            'produk' => Produk::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($part_code)
    {
        $rak = \App\Models\Rak::All();
        $tipe = \App\Models\Tipe::All();
        $kategori = \App\Models\Kategori::All();
        $produk= \App\Models\Produk::findOrFail($part_code);
        return view('produk.produk_edit',['produk'=>$produk, 'tipe'=>$tipe,'rak'=>$rak,'kategori'=>$kategori]);
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
        $update_produk= \App\Models\Produk::findOrFail ($id);
        $update_produk->part_code = $request->add_part_code;
        $update_produk->part_name = $request->add_part_name;
        $update_produk->tipe_code = $request->add_tipe_code;
        $update_produk->kategori = $request->add_kategori;
        $update_produk->berat = $request->add_berat;
        $update_produk->warna = $request->add_warna;
        $update_produk->rak_code = $request->add_rak_code;
        $update_produk->harga = $request->add_harga;
        $update_produk->stok = $request->add_stok;
        $update_produk->save();
        Alert::success('Message !', 'New post has been created successfully');
        return redirect('/produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk= \App\Models\Produk::findOrFail($id);
        $produk->delete();
        Alert::warning('Message !', 'Data Has Been Deleted');
        return redirect('/produk');
    }
}
