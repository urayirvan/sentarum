@extends('layout.dashboard')

@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <div class="d-inline">
                                    <h4>SENTARUM</h4>
                                    <span>Dashboard Information Management System</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href=""> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Data TPM</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-header end -->

                <!-- Page body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            @if(session ('sukses'))
                            <div class="alert alert-success background-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="icofont icofont-close-line-circled text-white"></i>
                                </button>
                                {{session('sukses')}}
                            </div>
                            @endif
                            <!-- Basic Form Inputs card start -->
                            <div class="card">
                                <div class="card-header">
                                    <a href="/ls1"><button type="" class="btn btn-primary"><i class="icofont icofont-arrow-left"></i>Kembali</button></a>
                                </div>
                                <div class="card-block">
                                    <h4 class="sub-title">Detail Data TPM </h4>
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">NIK</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="nik" class="form-control" value="{{$data->nik}}">
                                            </div>                                            
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="nama" class="form-control" value="{{$data->nama}}">
                                            </div>                                            
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="tmp_lahir" class="form-control" value="{{$data->tmp_lahir}}">
                                            </div>                                            
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tgl. Lahir</label>
                                            <div class="col-sm-10">
                                                <input type="date" name="tgl_lahir" class="form-control" value="@if(!empty($data->tgl_lahir)){{$data->tgl_lahir->format('Y-m-d')}}@endif">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="alamat" class="form-control" value="{{$data->alamat}}">
                                            </div>                                            
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">No Handphone</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="phone" class="form-control" value="{{$data->phone}}">
                                            </div>                                            
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama Bank</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="bank_id" class="form-control" value="{{$data->bank->nama_bank}}">                                
                                            </div>                                         
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">No Rekening Bank</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="no_rekening" class="form-control" value="{{$data->no_rekening}}">
                                            </div>                                            
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Desa Lokasi</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="desa_id" class="form-control" value="{{$data->desa->nama}}">
                                            </div>                                         
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Kecamatan Lokasi</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="kecamatan_id" class="form-control" value="{{$data->kecamatan->nama}}">                                
                                            </div>                                         
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Kota/Kabupaten Lokasi</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="kotakabupaten_id" class="form-control" value="{{$data->kotakabupaten->nama}}">
                                            </div>                                         
                                        </div>
                                    </form>                                    
                                </div>
                            </div>
                            <!-- Basic Form Inputs card end -->          
                        </div>
                        <!-- Input Grid card end -->                     
                    </div>
                </div>
            </div>
            <!-- Page body end -->
        </div>
    </div>
</div>

@stop
