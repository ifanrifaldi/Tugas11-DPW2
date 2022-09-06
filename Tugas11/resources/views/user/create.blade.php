@extends('template.base')

@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Tambah Data User
                    </div>
                    <div class="card-body">
                        <form action="{{url('admin/user')}}" method="post" enctype="multipart/form-data">
                            @csrf                       
                            <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Foto</label>
                                <input type="file" class="form-control " name="foto" accept=".png">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Username</label>
                                <input type="text" class="form-control" name="username">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Jenis Kelamin</label>
                                <input type="text" class="form-control" name="jenis_kelamin">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">No Handphone</label>
                                <input type="text" class="form-control" name="no_handphone">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <button class="btn btn-dark float-right"><i class="fa fa-save"></i>Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection