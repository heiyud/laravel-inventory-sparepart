<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Alert;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=\App\Models\User::All();
        return view('user.user', ['user'=>$user]);
    }

    public function profil(){
		$user = Auth::user();

		return view('user.profil', compact('user'));
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
        $save_user= new \App\Models\User;
        $save_user->name=$request->get('username');
        $save_user->email=$request->get('email');
        $save_user->password= bcrypt('password');
        if ($request->get('roles')=='ADMIN')
        {
            $save_user->assignRole('admin');
        }
        else
        {
            $save_user->assignRole('user');
        }
        $save_user->save();
        Alert::success('Tersimpan', 'Data Berhasil Disimpan');
        return redirect()->route( 'user.index' );

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.user',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
        return view('user.editUser',compact('user','roles','userRole'));
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

        $user = User::find($id);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
        $user->assignRole($request->input('role'));
        Alert::success('Update','Data Berhasil di update');
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = \App\Models\User::findOrFail($id);
        $hapus->delete();
        $hapus->removeRole('admin','user');
        Alert::success('Terhapus', 'Data Berhasil Dihapus');
        return redirect()->route('user.index');
    }
}
