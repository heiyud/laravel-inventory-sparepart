<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Models\Tipe;
use Illuminate\Support\Facades\Storage;

class TipeController extends Controller
{
    /** Untuk Menampilkan Halaman Unit */
    public function index()
    {
      $tipe = \App\Models\Tipe::All();
      return view('tipe.tipe', ['tipe'=>$tipe]);
    }
   /**Untuk Menambahnkan Data Unit */
    public function create()
    {

    }

    /**Untuk Menyimpan Data Unit */
    public function store(Request $request)
    {
        $this->validate($request, [
            'add_tipe_code' => 'required',
            'add_tipe_name' => 'required',
            'add_tipe_fitur' => 'required',
            'add_tipe_cc' => 'required',
            'add_th_rilis' => 'required',
        ]);

        $add_tipe=new \App\Models\Tipe;
        $add_tipe->tipe_code = $request->add_tipe_code;
        $add_tipe->tipe_name = $request->add_tipe_name;
        $add_tipe->tipe_fitur = $request->add_tipe_fitur;
        $add_tipe->tipe_cc = $request->add_tipe_cc;
        $add_tipe->th_rilis = $request->add_th_rilis;
        $add_tipe->save();
        Alert::success('Message !', 'New post has been created successfully');
        return redirect('/tipe');
    }

    /** Untuk Merubah Data Unit */
    public function edit($id)
    {
        $tipe= \App\Models\Tipe::findOrFail($id);
        return view('tipe.tipe_edit', ['tipe'=>$tipe]);
    }

    /** Untuk Menyimpan Data Yang Diupdate atau Diubah */
    public function update(Request $request, $id)
    {
        $update_tipe= \App\Models\Tipe::findOrFail ($id);
        $update_tipe->tipe_code = $request->add_tipe_code;
        $update_tipe->tipe_name = $request->add_tipe_name;
        $update_tipe->tipe_fitur = $request->add_tipe_fitur;
        $update_tipe->tipe_cc = $request->add_tipe_cc;
        $update_tipe->th_rilis = $request->add_th_rilis;
        $update_tipe->save();
        Alert::success('Update', 'Unit Has Been Updated');
        return redirect('/tipe');
    }


    /** Untuk Menghapus Data Unit */
    public function destroy($id)
    {
        $tipe= \App\Models\Tipe::findOrFail($id);
        $tipe->delete();
        Alert::warning('Message !', 'Data Has Been Deleted');
        return redirect('/tipe');
    }
  }

