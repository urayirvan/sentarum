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
                                        <a href="/dashboards"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Manajemen User</a>
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

                            <!-- Basic Form Inputs card start -->
                            <div class="card">
                                <div class="card-header">
                                    <a href="/user"><button type="" class="btn btn-primary"><i class="icofont icofont-arrow-left"></i>Kembali</button></a>
                                </div>
                                <div class="card-block">
                                    <h4 class="sub-title">Edit User</h4>
                                    <form action="/user/{{$user->id}}/update" method="POST" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="name" class="form-control" value="{{$user->name}}" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="email" class="form-control" value="{{$user->email}}" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">No Handphone</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="phone" class="form-control" value="{{$user->phone}}">
                                            </div>                                            
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" name="password" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">File Avatar</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="avatar" class="form-control" value="{{$user->avatar}}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Edit</button>
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