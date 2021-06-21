<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Tpm;
use App\Models\Bank;
use App\Models\Desa;
use App\Models\Kecamatan;
use App\Models\KotaKabupaten;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Custom1Export;
use App\Exports\Custom2Export;
use App\Exports\Custom3Export;

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
        $desa = Desa::all();
        $kec = Kecamatan::all();
        $kota = KotaKabupaten::all();

        return view('dashboard.mn1',compact(['bank','desa','kec','kota']));
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
        $data->desa_id = $request->desa_id;
        $data->kecamatan_id = $request->kecamatan_id;
        $data->kotakabupaten_id = $request->kotakabupaten_id;
        $data->save();

        return redirect ('/ls1')->with('sukses','Sukses! Data berhasil di tambahkan');
    }

    public function mn1edit($id)
    {
        $data = Tpm::find($id);
        $bank = Bank::all();
        $desa = Desa::all();
        $kec = Kecamatan::all();
        $kota = KotaKabupaten::all();

        return view('dashboard.mn1edit',compact(['data','bank','desa','kec','kota']));
    }

    public function mn1detail($id)
    {
        $data = Tpm::find($id);

        return view('dashboard.mn1detail',compact(['data']));
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
        $data->desa_id = $request->desa_id;
        $data->kecamatan_id = $request->kecamatan_id;
        $data->kotakabupaten_id = $request->kotakabupaten_id;
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

    public function mn3()
    {   
        $detail = Desa::all();
        return view('dashboard.mn3',compact(['detail']));
    }

    public function mn3create(Request $request)
    {
        $data = new Desa;
        $data->nama = $request->nama;
        $data->save();

        return redirect ('/mn3')->with('sukses','Sukses! Data berhasil di tambahkan');
    }

    public function mn3edit($id)
    {
        $data = Desa::find($id);
        $detail = Desa::all();

        return view('dashboard.mn3edit',compact(['data','detail']));
    }

    public function mn3update(Request $request,$id)
    {
        $data = Desa::findOrFail($id);
        $data->nama = $request->nama;
        $data->save();

        return redirect ('/mn3')->with('sukses','Sukses! Data berhasil di edit');        
    }

    public function mn4()
    {   
        $detail = Kecamatan::all();
        return view('dashboard.mn4',compact(['detail']));
    }

    public function mn4create(Request $request)
    {
        $data = new Kecamatan;
        $data->nama = $request->nama;
        $data->save();

        return redirect ('/mn4')->with('sukses','Sukses! Data berhasil di tambahkan');
    }

    public function mn4edit($id)
    {
        $data = Kecamatan::find($id);
        $detail = Kecamatan::all();

        return view('dashboard.mn4edit',compact(['data','detail']));
    }

    public function mn4update(Request $request,$id)
    {
        $data = Kecamatan::findOrFail($id);
        $data->nama = $request->nama;
        $data->save();

        return redirect ('/mn4')->with('sukses','Sukses! Data berhasil di edit');        
    }

    public function mn5()
    {   
        $detail = KotaKabupaten::all();
        return view('dashboard.mn5',compact(['detail']));
    }

    public function mn5create(Request $request)
    {
        $data = new KotaKabupaten;
        $data->nama = $request->nama;
        $data->save();

        return redirect ('/mn5')->with('sukses','Sukses! Data berhasil di tambahkan');
    }

    public function mn5edit($id)
    {
        $data = KotaKabupaten::find($id);
        $detail = KotaKabupaten::all();

        return view('dashboard.mn5edit',compact(['data','detail']));
    }

    public function mn5update(Request $request,$id)
    {
        $data = KotaKabupaten::findOrFail($id);
        $data->nama = $request->nama;
        $data->save();

        return redirect ('/mn5')->with('sukses','Sukses! Data berhasil di edit');        
    }

    public function mn6()
    {
        $bank = Bank::all();
        $desa = Desa::all();
        $kec = Kecamatan::all();
        $kota = KotaKabupaten::all();

        return view('dashboard.mn6',compact(['bank','desa','kec','kota']));
    }

    public function mn6cst1(Request $request)
    {
        $list = Tpm::Where('bank_id',$request->bank_id)
                        ->Where('kotakabupaten_id',$request->kotakabupaten_id)
                        ->orderBy('id','asc')
                        ->get();

        $pdf = PDF::loadview('dashboard.pdftemplate',['list'=>$list])->setPaper('a4','landscape');
        return $pdf->download('data-export.pdf');
    }

    public function mn6cst2(Request $request)
    {
        $list = Tpm::Where('bank_id',$request->bank_id)
                        ->Where('kotakabupaten_id',$request->kotakabupaten_id)
                        ->Where('kecamatan_id',$request->kecamatan_id)
                        ->orderBy('id','asc')
                        ->get();

        $pdf = PDF::loadview('dashboard.pdftemplate',['list'=>$list])->setPaper('a4','landscape');
        return $pdf->download('data-export.pdf');
    }

    public function mn6cst3(Request $request)
    {
        $list = Tpm::Where('bank_id',$request->bank_id)
                        ->Where('kotakabupaten_id',$request->kotakabupaten_id)
                        ->Where('kecamatan_id',$request->kecamatan_id)
                        ->Where('desa_id',$request->desa_id)
                        ->orderBy('id','asc')
                        ->get();

        $pdf = PDF::loadview('dashboard.pdftemplate',['list'=>$list])->setPaper('a4','landscape');
        return $pdf->download('data-export.pdf');
    }

    public function mn7()
    {
        $bank = Bank::all();
        $desa = Desa::all();
        $kec = Kecamatan::all();
        $kota = KotaKabupaten::all();

        return view('dashboard.mn7',compact(['bank','desa','kec','kota']));
    }

    public function mn7cst1(Request $request)
    {
        $bank = $request->bank_id;
        $kota = $request->kotakabupaten_id;
        return Excel::download(new Custom1Export($bank,$kota),'data-export.xlsx');
    }

    public function mn7cst2(Request $request)
    {
        $bank = $request->bank_id;
        $kota = $request->kotakabupaten_id;
        $kec = $request->kecamatan_id;
        return Excel::download(new Custom2Export($bank,$kota,$kec),'data-export.xlsx');
    }

    public function mn7cst3(Request $request)
    {
        $bank = $request->bank_id;
        $kota = $request->kotakabupaten_id;
        $kec = $request->kecamatan_id;
        $desa = $request->desa_id;
        return Excel::download(new Custom3Export($bank,$kota,$kec,$desa),'data-export.xlsx');
    }
}
