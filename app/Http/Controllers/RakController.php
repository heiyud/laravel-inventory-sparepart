<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Models\Rak;
use Illuminate\Support\Facades\Storage;

class RakController extends Controller
{
  /** Untuk Menampilkan Halaman Unit */
  public function index()
  {
    $rak = \App\Models\Rak::All();
    return view('rak.rak', ['rak'=>$rak]);
  }
 /**Untuk Menambahnkan Data Unit */
  public function create()
  {

  }

  /**Untuk Menyimpan Data Unit */
  public function store(Request $request)
  {
      $this->validate($request, [
          'add_rak_code' => 'required',
          'add_rak_name' => 'required',
          'add_rak_desc' => 'required',
      ]);

      $add_rak=new \App\Models\Rak;
      $add_rak->rak_code = $request->add_rak_code;
      $add_rak->rak_name = $request->add_rak_name;
      $add_rak->rak_desc = $request->add_rak_desc;
      $add_rak->save();
      Alert::success('Message !', 'New post has been created successfully');
      return redirect('/rak');
  }

  /** Untuk Merubah Data Unit */
  public function edit($id)
  {
      $rak= \App\Models\Rak::findOrFail($id);
      return view('rak.rak_edit', ['rak'=>$rak]);
  }

  /** Untuk Menyimpan Data Yang Diupdate atau Diubah */
  public function update(Request $request, $id)
  {
      $update_rak= \App\Models\Rak::findOrFail ($id);
      $update_rak->rak_code = $request->add_rak_code;
      $update_rak->rak_name = $request->add_rak_name;
      $update_rak->rak_desc = $request->add_rak_desc;
      $update_rak->save();
      Alert::success('Update', 'Unit Has Been Updated');
      return redirect('/rak');
  }


  /** Untuk Menghapus Data Unit */
  public function destroy($id)
  {
      $rak= \App\Models\Rak::findOrFail($id);
      $rak->delete();
      Alert::warning('Message !', 'Data Has Been Deleted');
      return redirect('/rak');
  }
}
