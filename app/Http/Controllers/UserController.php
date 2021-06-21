<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\User;

class UserController extends Controller
{
    public function index ()
    {
        $data_user = User::where('role','admin')->get();
        return view('user.index',['data_user' => $data_user]);
    }

    public function userinput ()
    {
        return view('user.userinput');
    }

    public function create(Request $request)
    {
        //Insert ke table user
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = 'admin';
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->remember_token = Str::random(100);
        $user->save();   

        if($request->hasFile('avatar')){
            $fileName = 'avatar-' . Str::random(5) . '.' . $request->file('avatar')->getClientOriginalExtension();
            $request->file('avatar')->move('avatar/',$fileName);
            $user->avatar = $fileName;
            $user->save();
        } 

        return redirect ('/user')->with('sukses','Sukses! Data berhasil di tambahkan');
    }

    public function detail($id)
    {
        $user = User::find($id);
        return view('user.detail',['user' => $user]);
    }

    public function profil($id)
    {
        $user = User::find($id);
        return view('user.profil',['user' => $user]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit',['user' => $user]);
    }

    public function update(Request $request,$id)
    {
        $user = User::findOrFail($id);
        $user->email = $request->email;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->save();

        if (!empty($request->password)){
            $user->password = bcrypt($request->password);
            $user->save();
        }

        if($request->hasFile('avatar')){
            $fileName = 'avatar-' . Str::random(5) . '.' . $request->file('avatar')->getClientOriginalExtension();
            $request->file('avatar')->move('avatar/',$fileName);
            $user->avatar = $fileName;
            $user->save();
        } 

        return redirect ('/user')->with('sukses','Sukses! Data berhasil di edit');        
    }

    public function updateprofil(Request $request,$id)
    {
        $user = User::findOrFail($id);
        $user->email = $request->email;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->save();
        
        if (!empty($request->password)){
            $user->password = bcrypt($request->password);
            $user->save();
        }

        if($request->hasFile('avatar')){
            $fileName = 'avatar-' . Str::random(5) . '.' . $request->file('avatar')->getClientOriginalExtension();
            $request->file('avatar')->move('avatar/',$fileName);
            $user->avatar = $fileName;
            $user->save();
        } 

        return redirect ('/dashboards');        
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect ('/user')->with('sukses','Sukses! Data berhasil di hapus');
    }

}
