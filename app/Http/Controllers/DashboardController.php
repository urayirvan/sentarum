<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Tpm;
use App\Models\Bank;

class DashboardController extends Controller
{
    public function home()
    {
        return view('dashboard.index');
    }

    public function ls1()
    {
        $detail = Tpm::all();

        return view('dashboard.ls1',compact(['detail']));
    }

    public function mn1()
    {
        $bank = Bank::all();

        return view('dashboard.mn1',compact(['bank']));
    }

    public function mn1create(Request $request)
    {
        $data = new Tpm;
        $data->nik = $request->nik;
        $data->nama = $request->nama;
        $data->tmp_lahir = $request->tmp_lahir;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->alamat = $request->alamat;
        $data->phone = $request->phone;
        $data->bank_id = $request->bank_id;
        $data->no_rekening = $request->no_rekening;
        $data->save();

        return redirect ('/mn1')->with('sukses','Sukses! Data berhasil di tambahkan');
    }

    public function mn1edit($id)
    {
        $data = Tpm::find($id);
        $bank = Bank::all();

        return view('dashboard.mn1edit',compact(['data','bank']));
    }

    public function mn1update(Request $request,$id)
    {
        $data = Tpm::findOrFail($id);
        $data->nik = $request->nik;
        $data->nama = $request->nama;
        $data->tmp_lahir = $request->tmp_lahir;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->alamat = $request->alamat;
        $data->phone = $request->phone;
        $data->bank_id = $request->bank_id;
        $data->no_rekening = $request->no_rekening;
        $data->save();

        return redirect ('/ls1')->with('sukses','Sukses! Data berhasil di edit');        
    }

    public function mn1delete($id)
    {
        $data = Tpm::find($id);
        $data->delete();

        return redirect ('/ls1')->with('sukses','Sukses! Data berhasil di hapus');
    }

    public function mn2()
    {   
        $detail = Bank::all();
        return view('dashboard.mn2',compact(['detail']));
    }

    public function mn2create(Request $request)
    {
        $data = new Bank;
        $data->nama_bank = $request->nama_bank;
        $data->save();

        return redirect ('/mn2')->with('sukses','Sukses! Data berhasil di tambahkan');
    }

    public function mn2edit($id)
    {
        $data = Bank::find($id);
        $detail = Bank::all();

        return view('dashboard.mn2edit',compact(['data','detail']));
    }

    public function mn2update(Request $request,$id)
    {
        $data = Bank::findOrFail($id);
        $data->nama_bank = $request->nama_bank;
        $data->save();

        return redirect ('/mn2')->with('sukses','Sukses! Data berhasil di edit');        
    }
}
