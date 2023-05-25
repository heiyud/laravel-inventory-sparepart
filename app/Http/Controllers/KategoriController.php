<?php

namespace App\Http\Controllers;
use Alert;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = \App\Models\Kategori::All();
        return view('kategori.kategori', ['kategori'=>$kategori]);
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
        $add_kategori=new \App\Models\Kategori;
        $add_kategori->id= $request->add_id;
        $add_kategori->kategori= $request->add_kategori;
        $add_kategori->save();
        Alert::success('Message !', 'New post has been created successfully');
        return redirect('/kategori');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori= \App\Models\Kategori::findOrFail($id);
        return view('kategori.kategori_edit', ['kategori'=>$kategori]);
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
        $update_kategori= \App\Models\Kategori::findOrFail ($id);
        $update_kategori->kategori = $request->add_kategori;
        $update_kategori->save();
        Alert::success('Update', 'Unit Has Been Updated');
        return redirect('/kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori= \App\Models\Kategori::findOrFail($id);
        $kategori->delete();
        Alert::warning('Message !', 'Data Has Been Deleted');
        return redirect('/kategori');
    }
}
