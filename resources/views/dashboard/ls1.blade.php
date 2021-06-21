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
                            <!-- Zero config.table start -->
                            <div class="card">
                                <div class="card-header">
                                    <a href="/mn1"><button type="" class="btn btn-primary">&nbsp;Tambah Data TPM</button></a>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                            <tr>
                                                <td>NIK</td>
                                                <td>Nama</td>
                                                <td>No Handphone</td>
                                                <td>Aksi</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($detail as $data)
                                            <tr>
                                                <td>{{$data->nik}}</td>
                                                <td>{{$data->nama}}</td>
                                                <td>{{$data->phone}}</td>
                                                <td>
                                                    <a href="/mn1/{{$data->id}}/edit"><i class="fa fa-edit"></i></i>&nbsp;Edit</a>&nbsp;
                                                    <a href="/mn1/{{$data->id}}/delete" onclick="return confirm('Apakah Anda yakin untuk menghapus data ?')"><i class="fa fa-trash"></i>&nbsp;Hapus</a>&nbsp;
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Zero config.table end -->                  
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
