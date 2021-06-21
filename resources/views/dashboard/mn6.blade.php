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
                                    <li class="breadcrumb-item"><a href="#">Export PDF</a>
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
                                <div class="card-block">
                                    <h4 class="sub-title">Export Custom 1</h4>
                                    <form action="/mn6/custom1" method="POST" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama Bank</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="bank_id" >
                                                    <option value=""></option>
                                                    @foreach($bank as $bk)
                                                    <option value="{{$bk->id}}">{{$bk->nama_bank}}</option>
                                                    @endforeach
                                                </select>                                 
                                            </div>                                         
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Kota/Kabupaten Lokasi</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="kotakabupaten_id" >
                                                    <option value=""></option>
                                                    @foreach($kota as $kt)
                                                    <option value="{{$kt->id}}">{{$kt->nama}}</option>
                                                    @endforeach
                                                </select>                                 
                                            </div>                                         
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Export Data</button>
                                            </div>
                                        </div>
                                    </form>                                    
                                </div>
                            </div>
                            <!-- Basic Form Inputs card end -->
                            <!-- Basic Form Inputs card start -->
                            <div class="card">
                                <div class="card-block">
                                    <h4 class="sub-title">Export Custom 2</h4>
                                    <form action="/mn6/custom2" method="POST" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama Bank</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="bank_id" >
                                                    <option value=""></option>
                                                    @foreach($bank as $bk)
                                                    <option value="{{$bk->id}}">{{$bk->nama_bank}}</option>
                                                    @endforeach
                                                </select>                                 
                                            </div>                                         
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Kecamatan Lokasi</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="kecamatan_id" >
                                                    <option value=""></option>
                                                    @foreach($kec as $kc)
                                                    <option value="{{$kc->id}}">{{$kc->nama}}</option>
                                                    @endforeach
                                                </select>                                 
                                            </div>                                         
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Kota/Kabupaten Lokasi</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="kotakabupaten_id" >
                                                    <option value=""></option>
                                                    @foreach($kota as $kt)
                                                    <option value="{{$kt->id}}">{{$kt->nama}}</option>
                                                    @endforeach
                                                </select>                                 
                                            </div>                                         
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Export Data</button>
                                            </div>
                                        </div>
                                    </form>                                    
                                </div>
                            </div>
                            <!-- Basic Form Inputs card end -->
                            <!-- Basic Form Inputs card start -->
                            <div class="card">
                                <div class="card-block">
                                    <h4 class="sub-title">Export Custom 3</h4>
                                    <form action="/mn6/custom3" method="POST" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama Bank</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="bank_id" >
                                                    <option value=""></option>
                                                    @foreach($bank as $bk)
                                                    <option value="{{$bk->id}}">{{$bk->nama_bank}}</option>
                                                    @endforeach
                                                </select>                                 
                                            </div>                                         
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Desa Lokasi</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="desa_id" >
                                                    <option value=""></option>
                                                    @foreach($desa as $ds)
                                                    <option value="{{$ds->id}}">{{$ds->nama}}</option>
                                                    @endforeach
                                                </select>                                 
                                            </div>                                         
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Kecamatan Lokasi</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="kecamatan_id" >
                                                    <option value=""></option>
                                                    @foreach($kec as $kc)
                                                    <option value="{{$kc->id}}">{{$kc->nama}}</option>
                                                    @endforeach
                                                </select>                                 
                                            </div>                                         
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Kota/Kabupaten Lokasi</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="kotakabupaten_id" >
                                                    <option value=""></option>
                                                    @foreach($kota as $kt)
                                                    <option value="{{$kt->id}}">{{$kt->nama}}</option>
                                                    @endforeach
                                                </select>                                 
                                            </div>                                         
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Export Data</button>
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
