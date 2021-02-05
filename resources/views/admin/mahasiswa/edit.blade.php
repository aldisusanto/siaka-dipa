@extends('layout.base')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Mahasiswa</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="/mahasiswa">Mahasiswa</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="container-fluid">
    <div class="row" style="padding: 10px;">

        <div class="col-md-12">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Edit Mahasiswa</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <form action="/mahasiswa/{{$mahasiswa->id}}/update" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto">
                        </div>
                        <div class="form-group">
                            <label for="namadepan">Nama Depan</label>
                            <input type="text" class="form-control" id="namadepan" name="nama_depan"
                                   value="{{$mahasiswa->nama_depan}}"
                                   placeholder="Masukkan Nama Depan">
                        </div>
                        <div class="form-group">
                            <label for="namabelakang">Nama Belakang</label>
                            <input type="text" class="form-control" id="namabelakang" name="nama_belakang"
                                   value="{{$mahasiswa->nama_belakang}}"
                                   placeholder="Masukkan Nama Belakang">
                        </div>
                        <div class="form-group">
                            <label for="jeniskelamin">Jenis Kelamin</label>
                            <select type="text" class="form-control" id="jeniskelamin" name="jenis_kelamin">
                                <option value="L" @if($mahasiswa->jenis_kelamin == 'L') selected @endif>Laki-Laki
                                </option>
                                <option value="P" @if($mahasiswa->jenis_kelamin == 'P') selected @endif>Perempuan
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat"
                                      placeholder="Masukkan Alamat"> {{$mahasiswa->alamat}}
                                </textarea>
                        </div>
                        <div class="form-group">
                            <label for="hp">No Hp</label>
                            <input type="text" class="form-control" id="hp" name="no_hp" value="{{$mahasiswa->no_hp}}"
                                   placeholder="Masukkan No Hp">
                        </div>

                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning">Update</button>
                        </div>
                    </div>
                </form>
                <!-- /.card-body -->
            </div>
        </div>

    </div>
</div>
@endsection
