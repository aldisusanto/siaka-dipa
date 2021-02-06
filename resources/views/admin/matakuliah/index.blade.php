@extends('layout.base')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Matakuliah</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Matakuliah</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="container-fluid">
    <div class="row" style="padding: 10px;">

        <div class="col-md-12">
            @if(session('sukses'))
            <div class="alert alert-success">
                {{session('sukses')}}
            </div>
            @endif
            <button style="margin-bottom:10px" type="button" class="btn btn-outline-info" data-toggle="modal"
                    data-target="#modal-info">
                <i class="fas fa-plus"> Tambah</i>
            </button>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Matakuliah</h3>
                    <div class="card-tools">
                        <form action="matakuliah" method="get">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="search" class="form-control float-right"
                                       placeholder="Search" autofocus autocomplete="off">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Jurusan</th>
                            <th>Kode Matakuliah</th>
                            <th>Nama Matakuliah</th>
                            <th>Wajib Atau Pilihan</th>
                            <th>SKS</th>
                            <th>Semester</th>
                            <th>Aksi</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        @foreach($matakuliah as $m)
                        <tr>

                            <td><?= $i; ?></td>
                            <td>{{$m->jurusan->nama_jurusan}}</td>
                            <td>{{$m->kode_matakuliah}}</td>
                            <td>{{$m->nama_matakuliah}}</td>
                            <td>{{$m->wajib_opsi}}</td>
                            <td>{{$m->sks}}</td>
                            <td>{{$m->semester}}</td>
                            <td>
                                <a href="matakuliah/{{$m->id}}/edit" class="btn btn-outline-warning"><i
                                        class="fas fa-pencil-alt"> Edit</i></a>
                                <a href="matakuliah/{{$m->id}}/delete" class="btn btn-outline-danger"
                                   onclick="return confirm('Yakin ingin di hapus')"><i
                                        class="fas fa-trash"> Delete</i></a></td>
                        </tr>

                        <?php $i++; ?>
                        @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-info">
            <div class="modal-dialog">
                <div class="modal-content bg-info">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Matakuliah</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="matakuliah/create" method="POST">
                        {{csrf_field()}}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="kode">Kode Matakuliah</label>
                                <input type="text" class="form-control" id="kode" name="kode_matakuliah"
                                       placeholder="Masukkan Kode Matakuliah">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Matakuliah</label>
                                <input type="text" class="form-control" id="nama" name="nama_matakuliah"
                                       placeholder="Masukkan Nama Matakuliah">
                            </div>
                            <div class="form-group">
                                <label for="sk">SKS</label>
                                <input type="text" class="form-control" id="sk" name="sks"
                                       placeholder="Masukkan Jumlah SKS">
                            </div>
                            <div class="form-group">
                                <label for="wp">Wajib Atau Pilihan</label>
                                <select type="text" class="form-control" id="wp" name="wajib_opsi">
                                    <option value="W">Wajib</option>
                                    <option value="P">Pilihan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jur">Jurusan</label>
                                <select type="text" class="form-control" id="jur" name="jurusan_id">
                                    <option value="1">Teknik Informatika</option>
                                    <option value="2">Sistem Informasi</option>
                                    <option value="3">RPL</option>
                                    <option value="4">Manajemen Sistem Informasi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="sem">Semester</label>
                                <input name="semester" class="form-control" id="sem" placeholder="Masukkan Semester">
                            </div>

                            <!-- /.card-body -->

                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-outline-light">Submit</button>
                        </div>
                    </form>
                </div>

                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

    </div>
</div>
@endsection
