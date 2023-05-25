<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Alert;
use App\Models\Supplier;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\SupplierImport;

class SupplierController extends Controller
{
    /** Untuk Menampilkan Halaman Supplier */
    public function index()
    {
        $supplier = \App\Models\Supplier::All();
        return view('supplier.supplier', ['supplier'=>$supplier]);
    }
   /**Untuk Menambahnkan Data Supplier */
    public function create()
    {

    }

    /**Untuk Import Data */
    public function import(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = $file->hashName();

        //temporary file
        $path = $file->storeAs('public/excel/',$nama_file);

        // import data
        $import = Excel::import(new SupplierImport(), storage_path('app/public/excel/'.$nama_file));

        //remove from server
        Storage::delete($path);

        Alert::success('Message !', 'New post has been imported successfully');
        return redirect('/supplier');
    }

    /**Untuk Menyimpan Data Supplier */
    public function store(Request $request)
    {
        $this->validate($request, [
            'add_supp_code' => 'required',
            'add_supp_name' => 'required',
            'add_supp_address' => 'required',
            'add_supp_phone' => 'required',
            'add_supp_person' => 'required'
        ]);

        $add_supplier=new \App\Models\Supplier;
        $add_supplier->supp_code = $request->add_supp_code;
        $add_supplier->supp_name = $request->add_supp_name;
        $add_supplier->supp_address = $request->add_supp_address;
        $add_supplier->supp_phone = $request->add_supp_phone;
        $add_supplier->supp_person = $request->add_supp_person;
        $add_supplier->save();
        Alert::success('Message !', 'New post has been created successfully');
        return redirect('/supplier');
    }

    /** Untuk Merubah Data Supplier */
    public function edit($id)
    {
        $supplier= \App\Models\Supplier::findOrFail($id);
        return view('supplier.supplier_edit', ['supplier'=>$supplier]);
    }

    /** Untuk Menyimpan Data Yang Diupdate atau Diubah */
    public function update(Request $request, $id)
    {
        $update_supplier= \App\Models\Supplier::findOrFail ($id);
        $update_supplier->supp_code = $request->add_supp_code;
        $update_supplier->supp_name = $request->add_supp_name;
        $update_supplier->supp_address = $request->add_supp_address;
        $update_supplier->supp_phone = $request->add_supp_phone;
        $update_supplier->supp_person = $request->add_supp_person;
        $update_supplier->save();
        Alert::success('Update', 'Supplier Has Been Updated');
        return redirect('/supplier');
    }
    //**Untuk Menampilkan Detail */
    public function show($id)
    {
        return view('supplier.supplier_show', [
            'supplier' => Supplier::findOrFail($id)
        ]);
    }

    /** Untuk Menghapus Data Supplier */
    public function destroy($supp_code)
    {
        $supplier= \App\Models\Supplier::findOrFail($supp_code);
        $supplier->delete();
        Alert::warning('Message !', 'Data Has Been Deleted');
        return redirect('/supplier');
    }
}
